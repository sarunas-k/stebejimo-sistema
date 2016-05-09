<!DOCTYPE html>
<html>
  <head>
    <title>Sekimo projektas</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/main.css">
	<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="map"></div>
	<div class="page-right">
	  <div class="control-buttons">
	    <button type="button" class="btn btn-success btn-lg control-button-start full-width" onclick="mapsController.start()">Pradėti</button>
	    <button type="button" class="btn btn-danger btn-lg control-button-stop full-width" onclick="mapsController.stop()">Stabdyti</button><span id="busena" style="display: none"><p class="text-uppercase">Veikia...</p></span>
	  </div>
	  <div class="commands">
	    <h4>Valdymo komandos:</h4>
	    <button type="button" data-loading-text="Vykdoma..." class="btn btn-primary command-button full-width" autocomplete="off">Komanda 1</button><br>
	    <button type="button" data-loading-text="Vykdoma..." class="btn btn-primary command-button full-width" autocomplete="off">Komanda 2</button><br>
	    <button type="button" data-loading-text="Vykdoma..." class="btn btn-primary command-button full-width" autocomplete="off">Komanda 3</button><br>
	  </div>
	  <div class="admin-user-controls">
	    <button type="button" class="btn btn-primary full-width">Vartotojų sąrašas</button>
	  </div>
	</div>
	  
    <script src="scripts/controller.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAqKVybk5Y9IhI9m7DrUONCYD2T5uKpP4&callback=mapsController.initMap" async defer></script>
  </body>
</html>