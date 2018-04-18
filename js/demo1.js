var map = null;
var boxpolys = null;
var directions = null;
var routeBoxer = null;
var distance = null; // km
var service = null;
var gmarkers = [];
var boxes = null;
var infowindow = new google.maps.InfoWindow();
var addToTrip = [];

function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(16.85, 74.58),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: 8
  };

  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  service = new google.maps.places.PlacesService(map);

  routeBoxer = new RouteBoxer();

  directionService = new google.maps.DirectionsService();
  directionsRenderer = new google.maps.DirectionsRenderer({
    map: map
  });

  // If there are any parameters at the end of the URL, they will be in  location.search
  // looking something like  "?marker=3"

  // skip the first character, we are not interested in the "?"
  var query = location.search.substring(1);

  // split the rest at each "&" character to give a list of  "argname=value"  pairs
  var pairs = query.split("&");
  for (var i = 0; i < pairs.length; i++) {
    // break each pair at the first "=" to obtain the argname and value
    var pos = pairs[i].indexOf("=");
    var argname = pairs[i].substring(0, pos).toLowerCase();
    var value = pairs[i].substring(pos + 1).toLowerCase();

    // process each possible argname  -  use unescape() if theres any chance of spaces
    if (argname == "to") {
      document.getElementById('to').value = unescape(value);
    }
    if (argname == "from") {
      document.getElementById('from').value = unescape(value);
    }
    if (argname == "dist") {
      document.getElementById('distance').value = parseFloat(value);
    }
    if (argname == "type") {
      document.getElementById('type').value = unescape(value);
    }
    if (argname == "keyword") {
      document.getElementById('keyword').value = unescape(value);
    }
    if (argname == "name") {
      document.getElementById('name').value = unescape(value);
    }
    if (argname == "submit") {
      route();
    }
  }
  initMapForWayPoints() ;
}

function route() {
  // Clear any previous route boxes from the map
  clearBoxes();

  // Convert the distance to box around the route from miles to km
  distance = parseFloat(document.getElementById("distance").value) * 1.609344;

  var request = {
    origin: document.getElementById("from").value,
    destination: document.getElementById("to").value,
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  }

  // Make the directions request
  directionService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsRenderer.setDirections(result);

      // Box around the overview path of the first route
      var path = result.routes[0].overview_path;
      boxes = routeBoxer.box(path, distance);
      // alert(boxes.length);
      //drawBoxes();
      findPlaces(0);
    } else {
      alert("Directions query failed: " + status);
    }
  });
}

// Draw the array of boxes as polylines on the map
function drawBoxes() {
  boxpolys = new Array(boxes.length);
  for (var i = 0; i < boxes.length; i++) {
    boxpolys[i] = new google.maps.Rectangle({
      bounds: boxes[i],
      fillOpacity: 0,
      strokeOpacity: 1.0,
      strokeColor: '#000000',
      strokeWeight: 1,
      map: map
    });
  }
}


function findPlaces(searchIndex) {
  var type = document.getElementById('type').value;
  // var keyword = document.getElementById('keyword').value;
  // var name = document.getElementById('name').value;
  var request = {
    bounds: boxes[searchIndex]
  };
  if (!!type && (type != "")) {
    if (type.indexOf(',') > 0)
      request.types = type.split(',');
    else
      request.types = [type];
  }

  service.nearbySearch(request, function(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      document.getElementById('restaurant_count').innerHTML = parseInt(document.getElementById('restaurant_count').innerHTML) + results.length
      for (var i = 0, result; result = results[i]; i++) {
        var marker = createMarker(result);
      }
    }
    if (status != google.maps.places.PlacesServiceStatus.OVER_QUERY_LIMIT) {
      searchIndex++;
      if (searchIndex < boxes.length)
        findPlaces(searchIndex);
    } else { // delay 1 second and try again
      setTimeout("findPlaces(" + searchIndex + ")", 1000);
    }

  });
}
$('h4').click(function(){
    alert("The paragraph was clicked.");
});

// Clear boxes currently on the map
function clearBoxes() {
  if (boxpolys != null) {
    for (var i = 0; i < boxpolys.length; i++) {
      boxpolys[i].setMap(null);
    }
  }
  boxpolys = null;
  document.getElementById('restaurants').innerHTML = "";
  document.getElementById('restaurant_count').innerHTML = "0";
  for (var i = 0; i < gmarkers.length; i++ ) {
    gmarkers[i].setMap(null);
  }
  gmarkers.length = 0;
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  if (place.icon) {
    var image = new google.maps.MarkerImage(
      place.icon, new google.maps.Size(71, 71),
      new google.maps.Point(0, 0), new google.maps.Point(17, 34),
      new google.maps.Size(25, 25));
  } else var image = {
    url: "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png",
    size: new google.maps.Size(7, 7),
    anchor: new google.maps.Point(3.5, 3.5)
  };

  var marker = new google.maps.Marker({
    map: map,
    icon: image,
    position: place.geometry.location
  });
  var request = {
    reference: place.reference
  };
  google.maps.event.addListener(marker, 'click', function() {
    service.getDetails(request, function(place, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        var contentStr = '<h5>' + place.name + '</h5><p>' + place.formatted_address;
        if (!!place.formatted_phone_number) contentStr += '<br>' + place.formatted_phone_number;
        if (!!place.website) contentStr += '<br><a target="_blank" href="' + place.website + '">' + place.website + '</a>';
        contentStr += '<br>' + place.types + '</p>';
        infowindow.setContent(contentStr);
        infowindow.open(map, marker);
      } else {
        var contentStr = "<h5>No Result, status=" + status + "</h5>";
        infowindow.setContent(contentStr);
        infowindow.open(map, marker);
      }
    });
  });

  restaurant_html = "<div class='col-sm-4'>  <div class='card'> <div class='card-body'>\
        <a href='' target='_blank'><a href='https://www.google.com/maps/place/?q=place_id:" + place.place_id + "' target='_blank'>\
          <h4 class='card-title'>" +  place.name + " &nbsp;";
  if(place.rating)
  {
    restaurant_html += "<span style='font-size: 12px' class='badge badge-warning'> Rating: " + place.rating + " </span>";
  }
  restaurant_html +=    "</h4></a>\
      <p class='card-text'>" + place.vicinity + "</p>\
      <a id='hotel1' class='btn btn-primary' data-placeid ='"+place.place_id+"' onclick='addToPlan(this)' >Add to Trip</a>\
      <a id='hotel1' class='btn btn-primary' data-placeid ='"+place.place_id+" >Remove from Trip</a>\
    </div>";

  document.getElementById('restaurants').innerHTML += restaurant_html;


  gmarkers.push(marker);
  if (!place.name) place.name = "result " + gmarkers.length;
}

google.maps.event.addDomListener(window, 'load', initialize);


function addToPlan(place){
    var placeId = place.getAttribute("data-placeid");
    // alert('Adding '+placeId+'to plan array');
    service.getDetails({
            placeId: placeId
          }, function(place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
              waypoint_html = "<option onclick='addToSorted(\""+placeId+"\")' value='"+ placeId +"'>"+ place.name +"</option>"
              document.getElementById('waypoints').innerHTML += waypoint_html;
            }
          });

    //push placeId to plan array
    addToTrip.push(placeId);

}
var sortedPlan=[];
function addToSorted(placeName){
  console.log(placeName);
  sortedPlan.push(placeName);
}

function getWayPoints(){
  
  console.log(sortedPlan);
}

function getPlaceInfo(placeID)
{


}

function initMapForWayPoints() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('naya-map'), {
    zoom: 6,
    center: {lat: 16, lng: 75}
  });
  directionsDisplay.setMap(map);
  document.getElementById('get-way').addEventListener('click', function() {
      calculateAndDisplayRoute(directionsService, directionsDisplay);
    });
}




function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  var waypts = [];
  for (var i = 0; i < sortedPlan.length; i++) {   
      waypts.push({
        location: { placeId: sortedPlan[i] },
        stopover: true
      });    
  }
  sortedPlan=[];
  console.log(waypts);
  directionsService.route({
    origin: document.getElementById('from').value,
    destination: document.getElementById('to').value,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
      var route = response.routes[0];
      // var summaryPanel = document.getElementById('directions-panel');
      // summaryPanel.innerHTML = '';
      // For each route, display summary information.
      // for (var i = 0; i < route.legs.length; i++) {
      //   var routeSegment = i + 1;
      //   summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
      //       '</b><br>';
      //   summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
      //   summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
      //   summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
      // }
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
