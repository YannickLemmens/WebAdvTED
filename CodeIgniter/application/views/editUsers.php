
<h2>Administrator view of TEDxPXL</h2>
<table class="table table-striped table-advance table-hover">
 <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                  <th><i class="fa fa-bookmark"></i> Email</th>
                                  <th><i class=" fa fa-edit"></i> Role</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              	<?php 
	foreach($user  as $row)
	{
		?>
		<tr>
			<td><?php echo $row->id?></td>
			<td><?php echo $row ->username?></td>
			<td><?php echo $row->email?></td>
			<td><?php echo $row->role?></td>
			<td>
	            <a href="<?php echo site_url("profile/show_user_id/".$row->id); ?>">
	            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
	            <a href="<?php echo site_url("profile/delete_user_id/".$row->id);?>">
	            <button class="btn btn-success btn-xs"><i class="fa fa-trash-o"></i></button>
	            </a>
	        </td>                         


		</tr>
		<?php
	}
	?>

</td>
</tr>
</tbody>
</table>

<a href="<?php echo site_url('profile/addAUser');?>"><button type="submit">Add User</button></a>

                              
