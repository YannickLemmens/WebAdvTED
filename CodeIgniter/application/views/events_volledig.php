<style>
#map-canvas {
        width: 500px;
        height: 400px;
		background-color: #CCC;
      }	  

</style>
<script src="https://maps.googleapis.com/maps/api/js"> 
</script>
<?php
foreach ($eventVolledig  as $row)
 {
	 	?>
<script>
function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng( <?php echo $row -> xcoord ?>,<?php echo $row -> ycoord?>),
          zoom: 17 ,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
 </script>
 <body>
	<h1 id="title"><?php echo $row -> title?></h1>
	<p id ="tekst"><?php echo $row -> description ?></p>
	<div id="map-canvas"></div>
 </body>	
	<?php	
}
		?>
