<style>
#team {

		-moz-border-radius:8px;
		-webkit-border radius:8px;
		border-radius:8px;
		width : 300px;
		display : inline-block;
		margin : 10px;
		background : #F8FAE3;
		
}

h2, p {
	margin : 5px;
}

.image {
	margin : 5px;
	border-radius : 12px;
}
  

}
</style>
<h3>Our Team</h3>

 <?php foreach($admins as $rows) 
 {?>
 <div id="team" class="showback">
	<a href="<?php echo site_url('profile/user')."/".$rows->id?>">
			 <?php $image = $rows ->image ;


					echo ' <img class="image" src="'.site_url("assets/uploads/$image") .'" width="70px" height="70px" align="">';
					?>
			<h2><?php echo $rows->username;?></h2>
			<p>Email : <?php echo $rows->email;?></p>
			<p>Rol : <?php echo $rows->role;?></p>
			</br>
	</a>
</div>
<?php
 }
?>
