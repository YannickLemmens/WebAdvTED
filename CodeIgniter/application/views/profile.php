 <?php 
if(isset($userid)):
			$query = $this->db->get_where('user', array('id' => $userid), 1);
			if ($query->num_rows() ==0)
				echo "<p>user does not exist</p>";
			else{
			

if(isset($userid)): ?>
<div class="row-fluid">
	<div class="col-md-4">
		<div class="showback">

			

				
			
		  <?php $image = $this->session->userdata("image") ;
              
      
       echo '<img  src="'.site_url("assets/uploads/$image") .'" id="profielfoto" alt="" width="40%" height="auto" class="img-rounded pull-left"/>';

      ?>
			<div style="margin-left:190px">
      <?php if(($userid == $this->session->userdata('user_id') or $this->session->userdata('role') == "Admin")): ?>
			<form method="post" action="<?php echo base_url() . "profile/User_Update/". $userid?>">
			<?php 

  			foreach ($query->result() as $row)
  			{
  		    ?>
  			<p>Name : <input type="text" class="form-control"  name="EditUsername" value="<?php echo $row->username?>"></input></p>
  			<p>Email : <input type="text" class="form-control" name="EditEmail"value="<?php echo $row->email?>"></input></p>
  			<p>Attended Events : 
			<select  name="EditRole" class="form-control">
				<option value="<?php echo $row->role ?>">Select role</option>
				<option value="member">Member</option>
				<option value="Admin">Admin</option>
			</select>
			</p>
  			<p>Forum Posts : 
			<select class="form-control">
				<option value="<?php echo $row->role ?>">Select role</option>
				<option value="member">Member</option>
				<option value="Admin">Admin</option>
			</select>
			</p>
  			<p>Profile Posts : 
			<select class="form-control">
				<option value="<?php echo $row->role ?>">Select role</option>
				<option value="member">Member</option>
				<option value="Admin">Admin</option>
			</select>
			</p>
  		 	<button class="btn btn-default" type="submit">Update information</button>
  			</form>
			</br>
			<form method="post" action="<?php echo base_url('upload')?>">
			<button class="btn btn-default" type="submit">Change profile picture</button>
  			</form>
			<?php
  			} 
      else :
      foreach ($query->result() as $row)
      {
        ?>
      <p>Name : <?php echo $row->username?></p>
      <p>Email : <?php echo $row->email?></p>
      <p>Attended Events : <?php echo $row->role?></p>
      <p>Forum Posts :<?php echo $row->role?></p>
      <p>Profile Posts : <?php echo $row->role?></p>
 
      </form>
      <?php  } endif; ?>

			
			</div>

	




		</div>
		
		<div class=" ds">
		<h3>latest attended events</h3>
			<div class="desc">
	            <div class="thumb">
	                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
	            </div>
	            <div class="details">
	                <p><muted>x days ago</muted><br/>
	                	event at location x <a href="#">read more</a> <br/>
	                </p>
	            </div>
	        </div>
        </div>




		<div class=" ds">
		<h3>latest Forum Posts</h3>
			<div class="desc">
	            <div class="thumb">
	                <span class="badge bg-theme"><i class="fa fa-font"></i></span>
	            </div>
	            <div class="details">
	                <p><muted>topic title</muted><br/>
	                	Small preview of what he actually posted inside the topic... <a class = "pull-right" href="#">read more</a> <br/>
	                </p>
	            </div>
	        </div>
        </div>
</div>
	<div class="col-md-8">
  	<!--
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <hr>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
    </ul>



	</div>
</div>
-->
<?php else: ?>





<div class="row-fluid">
	<div class="col-md-4">
		<div class="showback">

			<?php echo '<img  src="http://puu.sh/hMNpR/e542248c7f.jpg" alt="" width="170" height="170" class="img-rounded pull-left">'; ?>
	
			<div style="margin-left:190px">
			<?php 
		 	echo "<p>Name: ". $this->session->userdata('user_name')."</p>";
		 	echo "<p>Email: ". $this->session->userdata('user_email')."</p>";
		 	echo "<p>Role: ". $this->session->userdata('role')."</p>";
		 	echo "<p>Attended events: ". $this->session->userdata('role')."</p>";
		 	echo "<p>Forum posts: ". $this->session->userdata('role')."</p>";
		 	echo "<p>Profile posts: ". $this->session->userdata('role')."</p>";

			?>
			</div>

	




		</div>
		
		<div class=" ds">
		<h3>latest attended events</h3>
			<div class="desc">
	            <div class="thumb">
	                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
	            </div>
	            <div class="details">
	                <p><muted>x days ago</muted><br/>
	                	event at location x <a href="#">read more</a> <br/>
	                </p>
	            </div>
	        </div>
        </div>




		<div class=" ds">
		<h3>latest Forum Posts</h3>
			<div class="desc">
	            <div class="thumb">
	                <span class="badge bg-theme"><i class="fa fa-font"></i></span>
	            </div>
	            <div class="details">
	                <p><muted>topic title</muted><br/>
	                	Small preview of what he actually posted inside the topic... <a class = "pull-right" href="#">read more</a> <br/>
	                </p>
	            </div>
	        </div>
        </div>
</div>
	<div class="col-md-8">
 <!-- 	
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <hr>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
    </ul>



	</div>
</div>
-->
<?php endif; } endif;?>