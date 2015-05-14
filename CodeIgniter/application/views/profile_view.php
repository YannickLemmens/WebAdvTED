<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mainstyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<style>
	table {
	 margin-left : 10px;
	}
	
	#data input {
		width : 100%;
	}
	
	#submit {
		margin-left : 1%;
	}
	
	table th {
		background-color : #4D94FF;
	}
	
	
	

</style>
</head>
<h3>Edit Detail & Click Update Button</h3>
<?php foreach ($userUpdate as $user): ?>
<table class="table table-bordered" id="data">
<form method="post" action="<?php echo base_url() . "index.php/profile/update_user_id"?>">
<th><label id="hide">Id </label></th>
<th><label>Name </label></th>
<th><label>Email </label></th>
<th><label>Role</label></th>
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
