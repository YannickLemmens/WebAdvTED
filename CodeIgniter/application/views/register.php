<html>

<body>
<div class="container" style="margin-top:30px; margin-bottom:20px">
    <div class="row">
		 <?php echo validation_errors('<p class="error">'); ?>
        <?php echo form_open("index.php/user/registration"); ?>
            <div class="col-lg-6">
				<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="user_name">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter name" value="<?php echo set_value('user_name'); ?>" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email" value="<?php echo set_value('email_address'); ?>" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Enter password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="<?php echo set_value('password');?>" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
 
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        <?php echo form_close(); ?>

    </div>
</div>
</body>
</html>