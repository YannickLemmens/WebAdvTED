<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mainstyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/timeline.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/team.css'); ?>">
    <link href="<?php echo base_url('assets/external/google-code-prettify/prettify.css" rel="stylesheet'); ?>" />
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
<h3>Add User</h3>

<form method="post" action="<?php echo base_url() . "index.php/profile/addUser"?>">
  <p><i class="fa fa-question-circle"></i> Username</p>
  <input type="text" name="newUserName" class="form-control">
  <p><i class="fa fa-bookmark"></i> Emailadres</p>
  <input type="text" name="newUserEmail" height="100px" class="form-control">
  <p><i class=" fa fa-edit"></i> Role</p>
  <select name="newUserRole" class="form-control">
	<option value="null">Select role</option>
	<option value="Member">Member</option>
	<option value="Admin" >Admin</option>
	</select>
	<p><i class="fa fa-edit"></i>Password</p>
	<input type="text" name="newUserPassword" class="form-control">
<button class="btn btn-default" type="submit">Go!</button>

</form>
