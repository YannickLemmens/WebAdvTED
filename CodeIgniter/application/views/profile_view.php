<p>Edit Detail & Click Update Button</p>
<?php foreach ($userUpdate as $user): ?>

<form method="post" action="<?php echo base_url() . "index.php/profile/update_user_id"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $user->id; ?>">
<label>Name :</label>
<input type="text" name="dname" value="<?php echo $user->username; ?>">
<label>Email :</label>
<input type="text" name="demail" value="<?php echo $user->email; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>