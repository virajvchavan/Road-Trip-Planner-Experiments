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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBghm1BA7TPT0CrpP-d-qLC2MYn2UlXYZ8&libraries=places"></script>
	 <!-- AIzaSyBghm1BA7TPT0CrpP-d-qLC2MYn2UlXYZ8  -->
	 <!-- AIzaSyCdw7AQefpeI_wO2REQ-8sr77XPIqbD6VY -->
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
		<div id="page1">
			<br>
			<div class="container">
			<div class="row">
				<h5 class="col-sm-2">Search for: </h5>
				<select class="form-control col-sm-3 bg-dark text-white" type="text" id="type">
					<option value="restaurant">Restaurants</optionmiles of the route >
					<option value="gas_station">Petrol Pumps</option>
					<option value="hindu_temple">Temples</option>
					<option value="museum" selected="true">Museum</option>
					<option value="amusement_park">Amusement Park</option>
					<option value="car_repair">Car repair</option>
					<option value="art_gallery">Art Gallery</option>
				</select>
				&nbsp;
				<input type="submit" value="Search" class="btn btn-success col-sm-2" onclick="route()" />
			</div>
			</div>
			<br>
			<div id="map" style="width: 90%; height: 500px;"></div>
			<br>
			<div class="row">
				<div id="selected_waypoints" class="col-sm-3">
					<h4>Selected Places:</h4>
					<select class="form-control bg-dark text-white" multiple id="waypoints">
			      
			    </select>
			    <button id="get-way" class="btn btn-success" onclick="getWayPoints()">Get Route</button>
				</div>
				<div class="col-sm-8">
					<h4>Results: <span id="restaurant_count">0</span> </h4>
					<div class="row" id="restaurants">
					</div>
				</div>
			</div>
		</div>

		<br>
		<div id="page2">
			<a id="to_page1" href='#' class="btn btn-primary float-right">Replan</a>
			<h4>Your personalised route: </h4>
			<div id="naya-map" style="width: 90%; height: 500px;"></div>
			<br>
			<div id="directions-panel"></div>
		</div>
	</div>
	</body>
</html>
