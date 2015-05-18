<table class="table table-striped table-advance table-hover">
<thead>
	<tr>
			<td>Title</td>
			<td>Description</td>
			<td>Date</td>
			<td>Location</td>
			<td></td>
		</tr>
</thead>
<body>
<?php 
	foreach($events  as $row)
	{
		?>
		<tr>
			<td><?php echo $row->title?></td>
			<td><?php echo substr($row ->description,0,250). "..."?></td>
			<td><?php echo $row->date?></td>
			<td><?php echo $row->location?></td>
			<td><a href="<?php echo site_url('index.php/events/show_event_id/'.$row.ID);?>">
	            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
	            <a href="<?php echo site_url('index.php/events/delete_event_id/'.$row.ID);?>">
	            <button class="btn btn-success btn-xs"><i class="fa fa-trash-o"></i></button></td>
		</tr>
		
		<?php
	}
	?>
	</tbody>
	</table>