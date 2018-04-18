function initMapForWayPoints() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map-b'), {
    zoom: 6,
    center: {lat: 16, lng: 75}
  });
  directionsDisplay.setMap(map);
}

document.getElementById('getWay').addEventListener('click', function() {
  calculateAndDisplayRoute(directionsService, directionsDisplay);
});

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  var waypts = [];
  for (var i = 0; i < sortedPlan.length; i++) {   
      waypts.push({
        location: sortedPlan[i],
        stopover: true
      });    
  }

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
      var summaryPanel = document.getElementById('directions-panel');
      summaryPanel.innerHTML = '';
      // For each route, display summary information.
      for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
        summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
            '</b><br>';
        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
      }
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
