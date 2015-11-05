<?php
$sc_query = $this->db->query("select * from schools where sc_name = '$school_name'");
$school_details = $sc_query->row();
?>


<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    

    <div class="row">

        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">About</h3>
                </div>
                <div class="panel-body">
                    <?php
                    {
                        echo $school_details->about_us;
                    }
                    ?>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Courses</h3>
                </div>
                <div class="panel-body">
                    <?php	
						echo $school_details->course_structure;
					?>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Faculty</h3>
                </div>
                <div class="panel-body">
                    <?php	
						echo $school_details->faculty;
					?>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Events</h3>
                </div>
                <div class="panel-body">
                    <?php
						$event_query = $this->db->query("SELECT id, title, short_desc, image_path FROM events WHERE school = '$school_name' order by event_date desc");
						foreach($event_query->result() as $row)
						{
					?>
					
					<div class="col-md-4" >
                        <div class="thumbnail" style="height:350px"> 
                            <a href = "<?php echo site_url('feat/read_events?id=' . $row->id) ?>">
                                <img src="<?php echo base_url($row->image_path) ?>" alt="">
                            </a>
                            <div class="caption">
                                <h3><center><b><?= $row->title ?></b></center></h3>
                                <?= $row->short_desc ?>
                                <p></p>
                                <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                            </div>
                        </div>
                    </div>
					
					<?php
					}
					?>
                    

                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Placements</h3>
                </div>
                <div class="panel-body">
                    <?php	
						echo $school_details->placements;
					?>
                </div>
            </div>

            <br>


        </div> 
