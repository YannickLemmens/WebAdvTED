<?php print $this->uri->segment(0) ?>
<div class="col-lg-9 main-chart">
  <img id="logo" src="assets/images/TedxPxlLogo.png" alt="logo"/>
  <blockquote>TEDxUHasselt is an independently organized TED event. A place where you learn about cutting-edge ideas and connect with interesting people.</blockquote>


</div>
<div class="col-lg-3 ds">
  <!--COMPLETED ACTIONS DONUTS CHART-->
  <h3>Upcoming events</h3>

  <!-- First Action -->
    <?php

      $query = $this->db->query("SELECT * FROM `events` WHERE `date` >= CURDATE() ORDER BY `date` LIMIT 7");

      foreach ($query->result() as $row)
      {
     
      
    ?>
  <div class="desc">
    <div class="thumb">
      <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
    </div>
    <div class="details">
      <p><?php echo $row->title;?><br/>
        Location:<?php echo $row->location;?> <a href="<?php echo site_url('events/show_event_volledig/'.$row->ID)?>">read more</a> <br/>
        
      </p>
    </div>
  </div>

  <?php } ?>
                                         



  <!-- USERS ONLINE SECTION -->
  <h3>Our Team!</h3>
  <!-- First Member -->
  <?php 
  $query = $this->db->query("SELECT * FROM user limit 5;");

  foreach ($query->result() as $row)

  {
    ?>
    <div class="desc">
      <div class="thumb">
        <?php $image = $row ->image ;


        echo ' <img class="img-circle" src="'.site_url("assets/uploads/$image") .'" width="35" height="35" alt="profilepicture" >';
        ?>

      </div>
      <div class="details">


        <p><a href="profile/user/<?php echo $row ->id;?>"><?php echo $row ->username;?></a></p>
         <p class = "muted"> <?php echo $row ->role;?></p>

      </div>
    </div>
    <?php
  }
  ?>

</div><!-- /col-lg-3 -->
