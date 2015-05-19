<style>
#map-canvas {
        width: 500px;
        height: 400px;
		background-color: #CCC;
      }	  
</style>
<body>
<?php
foreach ($eventsVolledig  as $row)
 {
		?>
		<div class="panel panel-default event">
		<div class="panel-body">
		<div class="rsvp col-xs-2 col-sm-2">
		<i> <?php echo $row -> date ?></i>
		</div>
		<div class="info col-xs-8 col-sm-7">
		<a href=<?php echo site_url('index.php/events/show_event_volledig/'.$row->ID);?>><h3><?php echo $row -> title ?></h3></a>
		</hr>
		</br>
		</div>
		</div>
		</div>
	<?php	
}
		?>
</body>