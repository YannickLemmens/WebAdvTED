

<h3>Edit Detail & Click Update Button</h3>
<?php foreach ($userUpdate as $user): ?>
<table class="table table-bordered" id="data">
<form method="post" action="<?php echo base_url() . "profile/update_user_id"?>">
 <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                  <th><i class="fa fa-bookmark"></i> Email</th>
                                  <th><i class=" fa fa-edit"></i> Role</th>
                                  <th></th>
                              </tr>
                              </thead>
<tr>
<td><input type="text" name="did" class="form-control" value="<?php echo $user->id; ?>"></span>	</td>
<td><input type="text" name="dname" class="form-control" value="<?php echo $user->username; ?>"></td>
<td><input type="text" name="demail" class="form-control" value="<?php echo $user->email; ?>"></td>
<td>
<select name="drole" class="form-control">
	<option value="<?php echo $user->role;?>">Select role</option>
	<option value="Member">Member</option>
	<option value="Admin" >Admin</option>
</select>
</td>
<td><button class="btn btn-default" type="submit">Go!</button></td>	
</tr>

</form>
</table>

<?php endforeach; ?>
