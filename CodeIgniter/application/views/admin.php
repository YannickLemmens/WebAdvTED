<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mainstyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<style>
button {
	margin-left : 10px;
	margin-right : 10px;
}
</style>
</head>
<body>
<h2>Administrator view of TEDxPXL</h2>
<table class="table table-bordered">
	<tr>
		<td>ID</td>
		<td>Naam</td>
		<td>Emailadres</td>
		<td>Bewerkingen</td>
	</tr>
	<?php 
	foreach($user  as $row)
	{
		?>
		<tr>
			<td><?php echo $row->id?></td>
			<td><?php echo $row ->username?></td>
			<td><?php echo $row->email?></td>
			<td><button>Edit</button><button>Delete</button>
		</tr>
		<?php
	}
	?>

</table>
</body>