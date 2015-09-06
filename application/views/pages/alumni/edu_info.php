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
                <li role="presentation"><a href="<?= site_url('alumni_profile'); ?>">All Alumni Profiles</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/load_profile?user_id=' . $this->session->userdata('user_id')); ?>">View My Alumni Profile</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/create'); ?>">Create/Update Alumni profile</a></li>
                <li role="presentation" class="active"><a href="<?= site_url('alumni_profile/view_education_info'); ?>">Manage education details</a></li>
                <li role="presentation"><a href="<?= site_url('alumni_profile/view_work_info'); ?>">Manage Work Information</a></li>
            </ul>
        </div>
        <br>
        <h3>Education Information</h3>
        <br />
        <a href="<?= base_url('alumni_profile/add_education_info') ?>" class="btn btn-primary btn-xs "> Add </a>
        <br /><br />
        <script>
            function del_ask(str, n)
            {
                var x = confirm("Do you want to remove " + str + "?");
                if (x === true)
                    location.href = "<?= base_url('alumni_profile/delete_edu?edu_id=') ?>" + n;
            }
        </script>

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
                            <div class="col-sm-2">
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
                            <div class="col-sm-6">
                                <?= $row->course_name ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $row->start_year ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $row->passout_year ?>
                            </div>
                            <div class="col-sm-2">
                                <a href="<?= base_url('alumni_profile/edit_education_info?edu_id=' . $row->id) ?>" class="btn btn-xs btn-primary">Edit</a>
                                <a onclick="del_ask('<?php echo$row->course_name ?>', '<?php echo$row->id ?>')" class=" btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
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
            <br>
            </div>
            <br>
            </div>