<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<div class="col-sm-5">
    <?php echo form_open('new_user'); ?>

    <label>Username (unique)</label>
    <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/>

    <label>Full Name</label>
    <input type="text" class="form-control" name="full_name" value="<?php echo set_value('full_name'); ?>"/>

    <label>Email Address (unique)</label>
    <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"/>

    <label>Phone Number (Optional)</label>
    <input type="text" class="form-control" name="phone_number" value="<?php echo set_value('phone_number'); ?>"/>

    <label>Roll Number (Optional)</label>
    <input type="text" class="form-control" name="roll_number" value="<?php echo set_value('roll_number'); ?>"/>


    <label>Type</label>
    <select name="type" class="selectpicker" data-width="100%">
        <option value="admin">Administrator</option>
        <option value="user">General User</option>
        <option value="student">Student</option>
    </select>

    <label>Password</label>
    <input type="password" name="password" class="form-control">

    <label>Confirm Password</label>
    <input type="password" name="passconf" class="form-control">


    <br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Add User" class="btn btn-default"/></div>
</form>
</div>