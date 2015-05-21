<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<h1 class="mt"><i class="fa fa-user fa-2x"></i></h1>
					  			<?php $query = $this->db->query('SELECT * FROM user');?>
					  			<h3><?php echo $query->num_rows(); ?></h3>
                  			</div>
					  			<p><?php echo $query->num_rows(); ?> Registered members</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<h1 class="mt"><i class="fa fa-university fa-2x"></i></h1>
					  			<?php $query = $this->db->query('SELECT * FROM topics');?>
					  			<h3><?php echo $query->num_rows(); ?></h3>
                  			</div>
					  			<p><?php echo $query->num_rows(); ?> Forum threads have been made</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<h1 class="mt"><i class="fa fa-comment fa-2x"></i></h1>
					  			<?php $query = $this->db->query('SELECT * FROM posts');?>
					  			<h3><?php echo $query->num_rows(); ?></h3>
                  			</div>
					  			<p><?php echo $query->num_rows(); ?> Total forum posts are made</p>
                  		</div>
         
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<h1 class="mt"><i class="fa fa-calendar-o fa-2x"></i></h1>
					  			<?php $query = $this->db->query('SELECT * FROM events');?>
					  			<h3><?php echo $query->num_rows(); ?></h3>
                  			</div>
					  			<p>We have organized a total of <?php echo $query->num_rows(); ?> events</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<h1 class="mt"><i class="fa fa-users fa-2x"></i></h1>
					  			<?php $query = $this->db->query('SELECT * FROM event_attenders');?>
					  			<h3><?php echo $query->num_rows(); ?></h3>
                  			</div>
					  			<p>A total of <?php echo $query->num_rows(); ?> people have attented events</p>
                  		</div>

                  	
                  	</div>
                  	
                  
<a href="<?php echo site_url('admin/getAllUsers')?>">Beheer gebruikers</a>
</br>
<a href="<?php echo site_url('admin/getAllEvents')?>">Beheer events</a>
