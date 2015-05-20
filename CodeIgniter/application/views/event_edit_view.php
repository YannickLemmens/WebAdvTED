<head>
<style>
	p {
	margin-bottom:10px;
	margin-top : 10px;
}
	#data input {
		width : 100%;
	}
</style>
</head>
<h3>Edit Detail & Click GO! Button</h3>
<?php foreach ($eventsUpdate as $event): ?>

<form method="post" action="<?php echo base_url() . "index.php/events/update_event_id"?>">

                             
  <p><i class="fa fa-bullhorn"></i> ID</p>
  <input type="text" name="event_id" class="form-control" value="<?php echo $event->ID; ?>"></span>
  <p><i class="fa fa-question-circle"></i> Title</p>
  <input type="text" name="event_title" class="form-control" height="50" value="<?php echo $event->title; ?>">
  <p><i class="fa fa-bookmark"></i> Description</p>
  <input type="text" name="event_description" height="100px" class="form-control" value="<?php echo $event->description; ?>">
  <p><i class=" fa fa-edit"></i> Date</p>
  <input type="text" name="event_date" class="form-control" value="<?php echo $event->date ;?>">
  <p><i class="fa fa-edit"></i> Location </p>
  <input type="text" name="event_location" class="form-control" value="<?php echo $event->location ;?>">
  <p><i class="fa fa-edit"></i> xcoord </p>
  <input type="text" name="event_xcoord" class="form-control" value="<?php echo $event->xcoord ;?>">
  <p><i class="fa fa-edit"></i> ycoord </p>
  <input type="text" name="event_ycoord" class="form-control" value="<?php echo $event->ycoord ;?>">


<button class="btn btn-default" type="submit">Go!</button>

</form>


<?php endforeach; ?>
