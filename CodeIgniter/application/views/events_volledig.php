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

	<h1 id="title"><?php echo $row -> title?></h1>
	<p id ="tekst"><?php echo $row -> description ?></p>
	<div id="map-canvas"></div>
  <?php 
  $this->db->where('userid', $this->session->userdata('user_id'));
  $this->db->where('eventid', $row -> ID);
  $this->db->from('event_attenders');
  $query = $this->db->get();
  if ($query->num_rows() > 0):

?>
<form method="post" action="<?php echo base_url() . "index.php/events/set_not_going/". $row -> ID?>">
<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Going</button>
</form>
<?php else: ?>
<form method="post" action="<?php echo base_url() . "index.php/events/set_going/". $row -> ID?>">
<button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Not going</button>
</form>
	<?php	
  endif;
}
		?>
