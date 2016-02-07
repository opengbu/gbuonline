<?php
/*
 * Note by varun...
 * I am using this view to render all the clubs
 * Instead of having like 9 seperate view files
 * Rest of the files are now useless and can be deleted.
 * This will help in creating and deleting clubs, and prevent redundancy
 */
$query = $this->db->query("select * from clubs where c_name = '$c_name'");
$club_details = $query->row();
?>




<div class = "container-fluid" style = " margin-right: 10px; margin-left: 10px;" >
    <div class = "row">

        <div class = "col-md-9" style = "padding-right:30px; border-right: 2px solid #ccc;">

            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class = "panel-title">About</h3>
                </div>
                <div class = "panel-body">
                    <?= $club_details->about_us ?>                   
                </div>
            </div>


            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class = "panel-title">Faculty In-Charge</h3>
                </div>
                <div class = "panel-body">
                    <?= $club_details->faculty ?>
                </div>
            </div>

            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class = "panel-title">Student In-Charge</h3>
                </div>
                <div class = "panel-body">
                    <?= $club_details->students ?>
                </div>
            </div>

            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class = "panel-title">Events</h3>
                </div>
                <div class = "panel-body">
                    <?php
                    $events_q = $this->db->query("select id, title, short_desc, image_path, event_date from events where club like '$c_name' or club = '%' order by event_date desc");
                    $count = 0; // since front page displays top 3 upcoming events only
                    foreach ($events_q->result() as $row) {
                        $count++;
                        if ($count > 3)
                            break;
                        ?>

                        <div class = "col-md-4" >
                            <div class = "thumbnail" style="min-height: 50%">
                                <a href = "<?php echo site_url('feat/read_events?id=' . $row->id) ?>">
                                    <img src = "<?php echo base_url($row->image_path) ?>" alt = "code-in-gbu">
                                </a>
                                <div class = "caption">
                                    <h3><center><b><?= $row->title ?></b></center></h3>
                                    <?= $row->short_desc ?>
                                    <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>


<!--
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class = "panel-title">Gallery</h3>
                </div>
                <div class = "panel-body">


                </div>
            </div>
-->

        </div> 
