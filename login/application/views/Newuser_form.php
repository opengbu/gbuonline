<?php //echo validation_errors(); 
//echo $this->session->userdata('type');
?>  
<?php echo form_open('new_user'); ?>

<label>Username</label>
<input type="text" class="form-control" name="username"/>

<label>Email Address</label>
<input type="text" class="form-control" name="email"/>

<label>Type</label>
<select name="type" class="form-control">
    <option value="admin">Website Administrator</option>
    <option value="user">General User</option>
</select>

<label>Password</label>
<input type="password" name="password" class="form-control">


<label>Confirm Password</label>
<input type="password" name="passconf" class="form-control">


<br>
<?php
    echo '<label><font color="red">'.validation_errors().'</font></label>';
?>
<div><input type="submit" value="Add User" class="btn btn-default"/></div>
</form>