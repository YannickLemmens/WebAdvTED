
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>TEDxPXL</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/timeline.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/team.css'); ?>">
    <link href="<?php echo base_url('assets/external/google-code-prettify/prettify.css" rel="stylesheet'); ?>" />
 


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        
            <!--logo start-->
            <a href="<?php echo site_url('index.php/home')?>" class="logo"><img id="logo" src="../assets/images/HeaderLogo.png" alt="logo"/></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
            
                       

                </ul>
           </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
      
              <button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown">
               <img src="http://puu.sh/hMNpR/e542248c7f.jpg" width="35" height="35" class="img-circle">
               <?php echo $this->session->userdata('user_email'); echo "(". $this->session->userdata('role'). ")";?> 

              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="profile">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="user/logout">logout</a></li>
              </ul>

  

                 <?php }else{ ?>
                <li><a class = "btn-theme04" href="<?php echo site_url('index.php/admin')?>">login</a></li>
                <?php } ?>
            
            </ul>
          </li>
        </ul>
 
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              
                  <li class="mt">
                      <a href="<?php echo site_url('index.php/home')?>">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>
                   <li class="mt">
                      <a href="<?php echo site_url('index.php/about')?>">
                          <i class="fa fa-info"></i>
                          <span>About Us</span>
                      </a>
                  </li>  
                   <li class="mt">
                      <a href="<?php echo site_url('index.php/forum')?>">
                          <i class="fa fa-university"></i>
                          <span>Forum</span>
                      </a>
                  </li>                  
                   <li class="mt">
                      <a href="<?php echo site_url('index.php/register')?>">
                          <i class="fa fa-child"></i>
                          <span>Join Us!</span>
                      </a>
                  </li>  
                   <li class="mt">
                      <a href="<?php echo site_url('index.php/events')?>">
                          <i class="fa fa-calendar"></i>
                          <span>Events</span>
                      </a>
                    </li>
                    <?php if ($this->session->userdata('role') == "Admin") { ?>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tachometer"></i>
                          <span>Admin</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('index.php/admin')?>">Dashboard</a></li>
                          <li><a  href="<?php echo site_url('index.php/admin/getAllUsers')?>">Users</a></li>
                          
                      </ul>
                  </li>

                    <?php } ?>
                     
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

           <section id="main-content">

          <section class="wrapper site-min-height">
            <ol class="breadcrumb">
              <li><a href="#">TEDxPXL</a></li>
              <li class="active">Home</li>
              
            </ol>

            <div class="row mt">
              <div class="col-lg-12">
