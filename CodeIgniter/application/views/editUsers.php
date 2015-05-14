<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mainstyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<style>
table {
	margin-left : 10px;
}
button {
	margin-left : 10px;
	margin-right : 10px;
}

table th {
	background-color : #4D94FF;
}

td a {
	color: #000000;
}
</style>
<script>
$(document).ready(function()
{
  $("tr:even").css("background-color", "#DBEAFF");
});
</script>
</head>
<body>
<h2>Administrator view of TEDxPXL</h2>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Naam</th>
		<th>Emailadres</th>
		<th>Bewerken</th>
	</tr>
	<?php 
	foreach($user  as $row)
	{
		?>
		<tr>
			<td><?php echo $row->id?></td>
			<td><?php echo $row ->username?></td>
			<td><?php echo $row->email?></td>
			<td><a href="<?php echo site_url("index.php/profile/show_user_id/".$row->id); ?>"><button>Edit</button><a href="<?php echo site_url("index.php/profile/delete_user_id/".$row->id);?>" onclick="<?php echo site_url("index.php/leden");?>"><button>Delete</button></a>
		</tr>
		<?php
	}
	?>

</table>
<a href=
</body>