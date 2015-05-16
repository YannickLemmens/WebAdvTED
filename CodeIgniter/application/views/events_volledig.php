<style>
#map-canvas {
        width: 500px;
        height: 400px;
		background-color: #CCC;
      }	  
</style>
<?php
$servername = "91.121.5.88";
$username = "mc_pxl";
$password = "1wrq97gb";
$dbname = "mc_pxl";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn ->connect_error){
	die("Connection failed: " .$conn ->connect_error);
}

$sql = "SELECT id, title, description, date, location FROM events WHERE id=$_GET[id]";
$result  = $conn -> query($sql);
?>
<script src="https://maps.googleapis.com/maps/api/js"> 
</script>
<script>
function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng( 50.9289019,5.3898276 ),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
 </script>
<?php
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<h1>".$row["title"]."</h1>";
		echo "<p>".$row["description"]."</p>";
		echo "<div id='map-canvas'></div>";
	}
}

$conn->close();
?>