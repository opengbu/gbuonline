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

        <script>
            function del_ask(str, n)
            {
                var x = confirm("Do you want to remove " + str + "?");
                if (x === true)
                    location.href = "alumni_profile/delete_work?work_id=" + n;
            }
            var total_credits = 0;
        </script>
        <?php
        $select_rows = $this->db->query("select id,company_name,start_year,end_year,designation,location from work_details where work_details.user_id = '$user_id' ");
        $sum = 0;

        if ($select_rows->num_rows() >= 0) {
            ?>
            <br /><br />

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
                            <div class="col-sm-1">
                                <a onclick="del_ask('<?php echo$row->id ?>', '<?php echo$row->company_name ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
                            </div>
                        </div>
                    </li>

                    <?php
                }
                ?>
                <?php
            } else {
                echo "<b>Nothing to Display, please select appropriate Program and Semester to view details</b>";
            }
            ?>
            <br>
            </div>
            <br>
            </div>