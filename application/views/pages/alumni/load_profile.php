<?php
/*
 *  Created on :Sep 02, 2015, 2:20:36 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
$user_id = $this->input->get('user_id');
$basic_info_q = $this->db->query("select * from users,alumni_basic where users.user_id = '$user_id' && alumni_basic.user_id = users.user_id");
$basic_info = $basic_info_q->row();
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
<div class="container-fluid" style="padding-bottom: 50px;">

    <!--navbar moved to file nav.php-->
	

    <div class="well well-sm">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"><a href="<?= site_url('alumni_profile'); ?>">All Alumni Profiles</a></li>
            <li role="presentation" 
            <?php
            if ($user_id == $this->session->userdata('user_id'))
                echo 'class="active"';
            ?>
                ><a href="<?= site_url('alumni_profile/load_profile?user_id=' . $this->session->userdata('user_id')); ?>">View My Alumni Profile</a></li>
            <li role="presentation"><a href="<?= site_url('alumni_profile/create'); ?>">Create/Update Alumni profile</a></li>
            <li role="presentation"><a href="<?= site_url('alumni_profile/view_education_info'); ?>">Manage education details</a></li>
            <li role="presentation"><a href="<?= site_url('alumni_profile/view_work_info'); ?>">Manage Work Information</a></li>
            <li role="presentation" 
            <?php
            if ($user_id != $this->session->userdata('user_id'))
                echo 'class="active"';
            ?>    
                ><a href="#">Display Profile</a></li>
        </ul>
    </div>
    <?php
    if ($basic_info_q->num_rows() == 0) {
        echo "<b>The requested profile does not exist</b>";
        echo "</div>";
        return;
    }
    ?>
    <ul class="nav nav-list col-sm-12" style="padding-bottom: 30px;padding-top: 30px;">
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Name:</label>
                </div>
                <div class="col-sm-4">
                    <?= $basic_info->full_name ?>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Date Of Birth:</label>
                </div>
                <div class="col-sm-4">
                    <?= $basic_info->dob ?>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Phone Number:</label>
                </div>
                <div class="col-sm-4">
                    <?= $basic_info->phone_number ?>
                </div>
            </div>
        </li>


        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Sex:</label>
                </div>
                <div class="col-sm-4">
                    <?= ucfirst($basic_info->gender) ?>
                </div>
            </div>
        </li>


        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Address:</label>
                </div>
                <div class="col-sm-4">
                    <?= $basic_info->address ?>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Marital Status:</label>
                </div>
                <div class="col-sm-4">
                    <?= ucfirst($basic_info->marital_status) ?>
                </div>
            </div>
        </li>


        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Email</label>
                </div>
                <div class="col-sm-4">
                    <?= $basic_info->email ?>
                </div>
            </div>
        </li>    
    </ul>     
    <br />
    <div style="padding-bottom: 30px;padding-top: 30px;">

        <h3>Work Information</h3>
        <?php
        $select_rows = $this->db->query("select id,company_name,start_year,end_year,designation,location from work_details where work_details.user_id = '$user_id' ");

        if ($select_rows->num_rows() > 0) {
            ?>
            <ul class="nav nav-list col-sm-12" id = "record_list"> 
                <b>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-2">
                                Company
                            </div>
                            <div class="col-sm-3">
                                Location
                            </div>
                            <div class="col-sm-2">
                                Designation
                            </div>
                            <div class="col-sm-3">
                                Period
                            </div>
                        </div>
                    </li>
                </b>
                <?php
                foreach ($select_rows->result() as $row) {
                    ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <?= $row->company_name ?>
                            </div>
                            <div class="col-sm-3">
                                <?= $row->location ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $row->designation ?>
                            </div>
                            <div class="col-sm-3">
                                <?= $row->start_year . ' - ' . $row->end_year ?>
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
        </ul>
    </div>
    <div style="padding-bottom: 30px;padding-top: 30px;">

    </div>
    <div style="padding-bottom: 30px;padding-top: 30px;">

        <h3>Education Information</h3>

        <?php
        $select_rows = $this->db->query("select id,start_year,passout_year,course_name from edu_info where user_id = '$user_id' ");
        $sum = 0;

        if ($select_rows->num_rows() > 0) {
            ?>
            <ul class="nav nav-list col-sm-12" id = "record_list"> 
                <b>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                Course
                            </div>
                            <div class="col-sm-2">
                                Start Year
                            </div>
                            <div class="col-sm-2">
                                Passout Year
                            </div>
                        </div>
                    </li>
                </b>
                <?php
                foreach ($select_rows->result() as $row) {
                    ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $row->course_name ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $row->start_year ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $row->passout_year ?>
                            </div>
                        </div>
                    </li>

                    <?php
                }
                ?>
                <?php
            } else {
                echo "<b>Nothing to Display, no education information found</b>";
            }
            ?>
        </ul>
    </div>


</div>
