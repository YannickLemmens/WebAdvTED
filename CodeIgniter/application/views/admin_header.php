<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mainstyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<style>
ul {
	background-color:#94B8FF;
}
</style>

</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation" class="<?php echo $dashboard;?>"><a href="<?php echo site_url('index.php/admin')?>">Dashboard</a></li>
  <li role="presentation" class="<?php echo $userview;?>"><a href="<?php echo site_url('index.php/admin/getAllUsers')?>">Users</a></li>
</ul>
</body>


