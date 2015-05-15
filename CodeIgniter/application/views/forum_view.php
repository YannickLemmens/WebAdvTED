<!DOCTYPE html>
<html>
<header>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/forumstyle.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</header>

<body>
	
		<?php
	//create_cat.php
	echo '<tr>';
		echo '<td class="leftpart">';
			echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
		echo '</td>';
		echo '<td class="rightpart">';                
				echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
		echo '</td>';
	echo '</tr>';
	?>
	
</body>
</html>