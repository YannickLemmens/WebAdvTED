<style>
#team {
		border:outset 5px 	;
		-moz-border-radius-topleft: 12px;
		-moz-border-radius-topright:12px;
		-moz-border-radius-bottomleft:12px;
		-moz-border-radius-bottomright:12px;
		-webkit-border-top-left-radius:12px;
		-webkit-border-top-right-radius:12px;
		-webkit-border-bottom-left-radius:12px;
		-webkit-border-bottom-right-radius:12px;
		border-top-left-radius:12px;
		border-top-right-radius:12px;
		border-bottom-left-radius:12px;
		border-bottom-right-radius:12px;
		width : 300px;
		display : inline-block;
		margin : 10px;
		background : 
		
}

h2, p , img{
	margin : 5px;
}
  

}
</style>
<h3>Our Team</h3>

 <?php foreach($admins as $rows) 
 {?>
 <div id="team" class="panel-default">
 <?php $image = $rows ->image ;


        echo ' <img class="img-circle" src="'.site_url("assets/uploads/$image") .'" width="70px" height="70px" align="">';
        ?>
<h2><?php echo $rows->username;?></h2>
<p>Email : <?php echo $rows->email;?></p>
<p>Rol : <?php echo $rows->role;?></p>
</br>
</div>
<?php
 }
?>
