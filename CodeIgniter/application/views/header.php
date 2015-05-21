
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

  
  
   <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : 'your-app-id',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
  <script>
	  // This is called with the results from from FB.getLoginStatus().
	  function statusChangeCallback(response) {
		console.log('statusChangeCallback');
		console.log(response);
		// The response object is returned with a status field that lets the
		// app know the current login status of the person.
		// Full docs on the response object can be found in the documentation
		// for FB.getLoginStatus().
		if (response.status === 'connected') {
		  // Logged into your app and Facebook.
		  testAPI();
		} else if (response.status === 'not_authorized') {
		  // The person is logged into Facebook, but not your app.
		  document.getElementById('status').innerHTML = 'Please log ' +
			'into this app.';
		} else {
		  // The person is not logged into Facebook, so we're not sure if
		  // they are logged into this app or not.
		  document.getElementById('status').innerHTML = 'Please log ' +
			'into Facebook.';
		}
	  }

	  // This function is called when someone finishes with the Login
	  // Button.  See the onlogin handler attached to it in the sample
	  // code below.
	  function checkLoginState() {
		FB.getLoginStatus(function(response) {
		  statusChangeCallback(response);
		});
	  }

	  window.fbAsyncInit = function() {
	  FB.init({
		appId      : '1575233266064947',
		cookie     : true,  // enable cookies to allow the server to access 
							// the session
		xfbml      : true,  // parse social plugins on this page
		version    : 'v2.2' // use version 2.2
	  });

	  // Now that we've initialized the JavaScript SDK, we call 
	  // FB.getLoginStatus().  This function gets the state of the
	  // person visiting this page and can return one of three states to
	  // the callback you provide.  They can be:
	  //
	  // 1. Logged into your app ('connected')
	  // 2. Logged into Facebook, but not your app ('not_authorized')
	  // 3. Not logged into Facebook and can't tell if they are logged into
	  //    your app or not.
	  //
	  // These three cases are handled in the callback function.

	  FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	  });

	  };

	  // Load the SDK asynchronously
	  (function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));

	  // Here we run a very simple test of the Graph API after login is
	  // successful.  See statusChangeCallback() for when this call is made.
	  function testAPI() {
		console.log('Welcome!  Fetching your information.... ');
		FB.api('/me', function(response) {
		  console.log('Successful login for: ' + response.name);
		  document.getElementById('status').innerHTML =
			'Thanks for logging in, ' + response.name + '!';
		});
	  }
</script>
    </head>

  <body>

  <div id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        
            <!--logo start-->
            <a href="<?php echo site_url('home')?>" class="logo"><img  src="<?php echo base_url('/assets/images/HeaderLogo.png'); ?>" alt="logo"/></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
           </div>
            <div class="top-menu">
              <div class="nav pull-right top-menu">
                  <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
              
              <button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown">
              <?php $image = $this->session->userdata("image") ;
              
                echo '<img src="'.site_url("assets/uploads/$image") .'" width="35" height="35" class="img-circle" alt="profile picture">';

              ?>
               
               <?php echo $this->session->userdata('user_email'); echo "(". $this->session->userdata('role'). ")";?> 

              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('profile/User/' .$this->session->userdata('user_id'))?>">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="user/logout">logout</a></li>
              </ul>

  

                 <?php }else{ ?>
                 
                <a class = "btn-theme04" href="<?php echo site_url('admin')?>">login</a>

                <?php } ?>
            
            </div>
          
     
 
             
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
                      <a href="<?php echo site_url('home')?>">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>
                   <li class="mt">
                      <a href="<?php echo site_url('about')?>">
                          <i class="fa fa-info"></i>
                          <span>About Us</span>
                      </a>
                  </li>  
                   <li class="mt">
                      <a href="<?php echo site_url('forum')?>">
                          <i class="fa fa-university"></i>
                          <span>Forum</span>
                      </a>
                  </li>
				  
                  <?php if ($this->session->userdata('role') == null) :?>                  
                   <li class="mt">
                      <a href="<?php echo site_url('register')?>">
                          <i class="fa fa-child"></i>
                          <span>Join Us!</span>
                      </a>
                  </li>  
                <?php endif; ?>
                   <li class="mt">
                      <a href="<?php echo site_url('events')?>">
                          <i class="fa fa-calendar"></i>
                          <span>Events</span>
                      </a>
                    </li>
                    <?php if ($this->session->userdata('role') == "Admin") :?>
                 <li class="sub-menu">
						<a href="<?php echo site_url('admin')?>">
                      <!--<a href="javascript:;" >-->
                          <i class="fa fa-tachometer"></i>
						  Admin
                          <!--<span>Admin</span>-->
						  
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('admin')?>">Dashboard</a></li>
                          <li><a  href="<?php echo site_url('admin/getAllUsers')?>">Users</a></li>
                          
                      </ul>
                  </li>
                    <?php endif; ?>
                     <li class="mt">
						<a>
						<i class="fa fa-search"></i>
						<span>
						<input type="text" class="form-control" style="width:125px"></input>
						</span>
						</a>
				  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

           <div id="main-content">

          <div class="wrapper site-min-height">
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('home')?>">TEDxPXL</a></li>

              <?php
              $help = false;

              if($this->uri->segment(3) != "")
              {
                
                $link =site_url($this->uri->segment(1));
                echo '<li><a href="'. $link.'">' . $this->uri->segment(1) . '</a> </li>';
                $link = $link . $this->uri->segment(2);
                echo '<li><a href="'.$link.'">' . $this->uri->segment(2) . '</a> </li>';
                echo '<li class="active">' . $this->uri->segment(3) . ' </li>';
                $help = true;

              }
              else if(($this->uri->segment(2) != "") && ($help = false))
              {
                
                $link =site_url($this->uri->segment(1));
                echo '<li><a href="'.$link .'">' . $this->uri->segment(1) . '</a> </li>';
                echo '<li class="active">' . $this->uri->segment(2) . '</li>';
                $help = true;
        

              }
              else
              {
echo '<li class="active">' . $this->uri->segment(1) . '</li>';
              }

 
              ?>

              
            </ol>

            <div class="row mt">
              <div class="col-lg-12">
