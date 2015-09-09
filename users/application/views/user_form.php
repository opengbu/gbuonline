<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<div class="col-sm-5">
    <?php echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']); ?>

    <label>Username (unique)</label>
    <input type="text" class="form-control" name="username" value="<?php echo set_value('username', @$username); ?>"/>
    <br />

    <label>Full Name</label>
    <input type="text" class="form-control" name="full_name" value="<?php echo set_value('full_name', @$full_name); ?>"/>
    <br />

    <label>Email Address (unique)</label>
    <input type="text" class="form-control" name="email" value="<?php echo set_value('email', @$email); ?>"/>
    <br />

    <label>Phone Number (Optional)</label>
    <input type="text" class="form-control" name="phone_number" value="<?php echo set_value('phone_number', @$phone_number); ?>"/>
    <br />

    <label>Roll Number (Optional)</label>
    <input type="text" class="form-control" name="roll_number" value="<?php echo set_value('roll_number', @$roll_number); ?>"/>

    <br /><?php
    if ($this->permissions->get_level() >= 4) {
        $options = $this->permissions->all_permisiions();
        if ($this->permissions->get_level() != 5)
            unset($options['superadmin']);

        echo '<label>Type</label><br />';
        echo form_dropdown('type', $options, set_value('type', @$type), 'class="selectpicker"');
        echo '<br /><br />';
    }
    ?>   

    <label>Password</label>
    <input type="password" name="password" class="form-control">

    <br />
    <label>Confirm Password</label>
    <input type="password" name="passconf" class="form-control">


    <br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Add User" class="btn btn-default"/></div>
        <?php
        echo form_close();
        ?>
</div>