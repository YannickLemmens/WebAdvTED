
<head>
<title>TEDxPXL</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mainstyle.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>


</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TEDxPXL</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('index.php/home')?>">Home</a></li>
			<li><a href="<?php echo site_url('index.php/register') ?>">Lid worden</a></li>

			<li><a href="<?php echo site_url('index.php/about')?>">About</a></li>

			


          </ul>
          <ul class="nav navbar-nav navbar-right">
     
 
     

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">  <img src="http://puu.sh/hMNpR/e542248c7f.jpg" width="40" height="40" 
        class="img-circle"> <?php echo "<p>". $this->session->userdata('user_email'). "</p>";?></img> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>



        </div><!--/.nav-collapse -->
       
            <?php if ($this->session->userdata('logged_in') == TRUE)
      {
        echo '<li><a href="'.site_url('index.php/user/logout').'">logout</a></li>';
     
      }
      else 
        echo '<li><a href="'. site_url('index.php/login') .'">Login</a></li>';
      ?>


      </div>

    </nav>
    <div id="fix-for-navbar-fixed-top-spacing" style="height: 42px;">&nbsp;</div>
