<style scoped>
.event .panel-body {
  background: #BBDEFB;
  border: 1px solid #448AFF;
  padding:0;
  margin:0;
 
}
.event .panel-body > div {
  padding: 0 10px;
}
.event .panel-body .rsvp {
  border-left: none;
  padding: 0;
  text-align: center;
  position: relative;
  background: #64B5F6;
  color: white;
  
}

.event .rsvp > div {
  font-size: 12px;
  position: absolute;
  bottom: 0;
  background: #42A5F5;
  width: 100%;
}

.event .rsvp p {
  font-size: 2em;
  display: block;
  position:relative;
  top:17%;
  margin-bottom:2px;
}
.event .rsvp i:last-of-type{
    font-size:1.5em;
    margin-top:-23px;
}




}
</style>


<?php
foreach ($events  as $row)
 {
		?>
		<div class="panel panel-default event">
		<div class="panel-body">
		<div class="rsvp col-xs-2 col-sm-2">
		<i> <?php echo $row -> date ?></i>
		</div>
		<div class="info col-xs-8 col-sm-7">
		<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
		<a href="<?php echo site_url('events/show_event_volledig/'.$row->ID);?>"><h3><?php echo $row -> title ?></h3></a>
		 <?php }else{ ?>
		<h3><?php echo $row -> title ?></h3>
		<?php } ?>
		
		<br>
		</div>
		</div>
		</div>
	<?php	
}
		?>
