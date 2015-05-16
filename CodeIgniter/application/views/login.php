<?php if (isset($login_fail)) : ?>

    <div class="alert alert-danger" role="alert">
  <p class="alert-link">Username or password is incorrect. Please try again.</p>
</div>
    
<?php endif; ?>

<body>
 <?php echo form_open("index.php/login/login"); ?>
	<div class="container">
     <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" name="email" id="email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
	
                </form>
            </div>
            <a href="<?php echo site_url('index.php/register')?>" class="text-center new-account">Create an account</a>  or login with Facebook: 
			
			<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
			</fb:login-button>
			<div id="status"></div>
			
        </div>
    </div>
</div>
 <?php echo form_close(); ?>
</body>