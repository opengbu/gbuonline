<?php
/*
 *  Created on :Sep 02, 2015, 2:20:36 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<style>
    h2{
        padding: 0px;
        margin: 0px;
    }

    h3{
        padding: 0px;
        margin: 0px;
    }
</style>

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">

        <!--navbar moved to file nav.php-->
	

        <div class="well well-sm">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active"><a href="<?= site_url('alumni_profile'); ?>">All Alumni Profiles</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/load_profile?user_id=' . $this->session->userdata('user_id')); ?>">View My Alumni Profile</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/create'); ?>">Create/Update Alumni profile</a></li>
                <li role="presentation" ><a href="<?= site_url('alumni_profile/view_education_info'); ?>">Manage education details</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/view_work_info'); ?>">Manage Work Information</a></li>
            </ul>
        </div>
        <br>
        <h3>All Alumni</h3>

        <?php
        $select_rows = $this->db->query("select full_name, roll_number, users.user_id, gender from users,alumni_basic where users.user_id = alumni_basic.user_id");
        $sum = 0;

        if ($select_rows->num_rows() > 0) {
            ?>
            <ul class="nav nav-list col-sm-12" id = "record_list"> 
                <b>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-4">
                                Name
                            </div>
                            <div class="col-sm-2">
                                Sex
                            </div>
                            <div class="col-sm-3">
                                Roll Number
                            </div>

                            <div class="col-sm-3">
                                Actions
                            </div>
                        </div>
                    </li>
                </b>
                <?php
                foreach ($select_rows->result() as $row) {
                    ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <?= $row->full_name ?>
                            </div>
                            <div class="col-sm-2">
                                <?= ucfirst($row->gender) ?>
                            </div>
                            <div class="col-sm-3">
                                <?= $row->roll_number ?>
                            </div>
                            <div class="col-sm-3">
                                <a href="<?= base_url('alumni_profile/load_profile?user_id=' . $row->user_id) ?>" class="btn btn-xs btn-primary">View</a>
                            </div>
                        </div>
                    </li>

                    <?php
                }
                ?>
                <?php
            } else {
                echo "<b>Nothing to Display, no work data found</b>";
            }
            ?>
            <br>
            </div>
            <br>
            </div>