<?php
/*
 *  Created on :Sep 02, 2015, 2:20:36 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">

        <!--navbar moved to file nav.php-->
	
        <div class="well well-sm">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href="<?= site_url('alumni_profile'); ?>">All Alumni Profiles</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/load_profile?user_id=' . $this->session->userdata('user_id')); ?>">View My Alumni Profile</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/create'); ?>">Create/Update Alumni profile</a></li>
                <li role="presentation" class="active"><a href="<?= site_url('alumni_profile/view_education_info'); ?>">Manage education details</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/view_work_info'); ?>">Manage Work Information</a></li>
            </ul>
        </div>
        <br> 
        <h3>Add/Update Education Information</h3>
        <?php
        echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
        ?>

        <p>
            <label for="course_name">Course Name (completed at Gautam Buddha University)<span class="required">*</span></label>
            <?php echo form_error('course_name'); ?>
            <br /><input class="form-control"  id="company_name" type="text" name="course_name" maxlength="50" value="<?php echo set_value('course_name', @$course_name); ?>"  />
        </p>

        <p>
            <label for="start_year">Start Year <span class="required">*</span></label>
            <?php echo form_error('start_year'); ?>
            <br /><input class="form-control" id="start_year" type="text" name="start_year" maxlength="15" value="<?php echo set_value('start_year', @$start_year); ?>"  />
        </p>

        <p>
            <label for="passout_year">Pass Out Year<span class="required">*</span></label>
            <?php echo form_error('end_year'); ?>
            <br /><input class="form-control" id="end_year" type="text" name="passout_year" maxlength="15" value="<?php echo set_value('passout_year', @$passout_year); ?>"  />
        </p>

        <p>
            <?php echo form_submit('submit', 'Submit'); ?>
        </p>

        <?php echo form_close(); ?>


    </div>

    <br>
</div>
</div>