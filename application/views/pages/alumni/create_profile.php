<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">

        <div class="well well-sm">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href="<?= site_url('alumni'); ?>">Home</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/distinguished'); ?>">Distinguished Alumni</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/alumniList'); ?>">Alumni List</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/events'); ?>">Events</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/gallery'); ?>">Gallery</a></li>
                <li role="presentation" class="active"><a href="<?= site_url('alumni'); ?>">Manage Profile</a></li>
            </ul>
        </div>
        <br> 
        <link rel="stylesheet" href="<?php echo base_url() . 'users/application/views/common/' . 'dist/css/bootstrap-select.css' ?>">
        <script type="text/javascript" src="<?php echo base_url() . 'users/application/views/common/' . 'dist/js/bootstrap-select.js' ?>"></script>
        <h3>Create/Update your profile </h3>
        <?php echo form_open(current_url()); ?>

        <p>
            <label for="dob">Date Of birth <span class="required">*</span></label>
            <?php echo form_error('dob'); ?>
            <br /><input class="form-control" id="dob" type="text" name="dob" maxlength="100" value="<?php echo set_value('dob',@$dob); ?>"  />
        </p>

        <p>
            <label for="address">Address <span class="required">*</span></label>
            <?php echo form_error('address'); ?>
            <br /><input class="form-control" id="address" type="text" name="address"  value="<?php echo set_value('address',@$address); ?>"  />
        </p>

        <p>
            <label for="gender">Gender <span class="required">*</span></label>
            <?php echo form_error('gender'); ?>

            <?php
            $options = array(
                '' => 'Please Select',
                'male' => 'Male',
                'female' => 'Female',
                'other' => 'I prefer not to disclose'
            );
            ?>

            <br /><?php echo form_dropdown('gender', $options, set_value('gender',@$gender), 'class="selectpicker"') ?>
        </p>                                             

        <p>
            <label for="marital_status">Marital status <span class="required">*</span></label>
            <?php echo form_error('marital_status'); ?>

            <?php
            $options = array(
                '' => 'Please Select',
                'married' => 'Married',
                'single' => 'Single'
            );
            ?>

            <br /><?php echo form_dropdown('marital_status', $options, set_value('marital_status',@$marital_status), 'class="selectpicker"') ?>
        </p>                                             


        <p>
            <?php echo form_submit('submit', 'Submit', 'class="btn btn-default"'); ?>
        </p>

        <?php echo form_close(); ?>
        <br>
    </div>
</div>