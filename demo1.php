<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<style type="text/css">
		html, body, #map_canvas {
		  margin: 0;
		  padding: 0;
		  height: 100%;
		}
	</style>

	</head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jquery-3.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdw7AQefpeI_wO2REQ-8sr77XPIqbD6VY&libraries=places"></script>
	<script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/routeboxer/src/RouteBoxer.js" type="text/javascript"></script>
	<script src="js/demo1.js"></script>
	<body>
	<div class="container">
	<div class="hidden" hidden>
		<input type="text" id="distance" value="2" size="2" hidden>From:
		<input type="text" id="from" value=<?php echo '"'.$_GET['start'].'"' ?> />To:
		<input type="text" id="to" value=<?php echo '"'.$_GET['end'].'"' ?> />
	<br>
	</div>
	<label>Type</label>
	<select type="text" id="type">
		<option value="restaurant">Restaurants</optionmiles of the route >
		<option value="gas_station">Petrol Pumps</option>
		<option value="hindu_temple">Temples</option>
		<option value="museum" selected="true">Museum</option>
		<option value="amusement_park">Amusement Park</option>
		<option value="car_repair">Car repair</option>
		<option value="art_gallery">Art Gallery</option>
	</select>
	<input type="submit" value="Search" onclick="route()" />
	<br>
	<div id="map" style="width: 90%; height: 500px;"></div>
	<br>
		<h4>Results: <span id="restaurant_count">0</span> </h4>
		<div  class="row" id="restaurants">
		</div>
		<div>
			<button id='finalclick'> Finalize </button>
				<select id="selectNumber">
						<option>Choose Order</option>
					</select>
		</div>
		<div>
			<h4>Selected Places:</h4>
			<select multiple id="waypoints">
	      
	    </select>
	    <button id="get-way" onclick="getWayPoints()">Pepsi</button>
		</div>
	<br>
	<div id="naya-map" style="width: 90%; height: 500px;"></div>
	</div>
	</body>
</html>
