<link rel="stylesheet" href="<?php echo $this->cdn->res_url() . 'users/application/views/common/' . 'css/bootstrap-select.min.css' ?>">
<script type="text/javascript" src="<?php echo $this->cdn->res_url() . 'users/application/views/common/' . 'js/bootstrap-select.min.js' ?>"></script>

<style>
.feat_event
{
    background-color: #F2F2F2;
}
</style>

<!--script to display the selected option-->
<script>

    $(function () {

        $(".dropdown-menu").on('click', 'li a', function () {
            $(this).parent().parent().siblings(".btn:first-child").html($(this).text() + ' <span class="caret"></span>');
            $(this).parent().parent().siblings(".btn:first-child").val($(this).text());
        });

    });

</script>
<?php
	$big_event_id = $this->input->get('big_event_id');
	if ( strlen($big_event_id) < 1)
	{	
		$big_event_id = '%';
		$big_event_filter = " and (mega_event_id like '$big_event_id' or mega_event_id is NULL)";	
	}
	else
	{
		$big_event_filter = " and mega_event_id like '$big_event_id' ";	
	}
?>
<div class="container-fluid" style="margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   

            <!--code for FILTER menu begins-->

            <div class="well well-sm"><!--bootstrap well begins-->

                <div class = "row"><!--a row inside another row-->
                    <form action="" method="get">
                        <div class = "col-md-2" style="margin-top: 3px; font-size: 120%;">
                            <code><b>FILTER BY : </b></code>
                        </div>

                        <div class = "col-md-3" >

                            <select class="selectpicker" onchange="this.form.submit()" data-style="btn-success" name="school" data-width=100% role="menu" aria-labelledby="dropdownMenu1">
                                <option value="%" >ALL</a></option>
                                <?php
                                $schools_query = $this->db->query("select sc_name from schools");
                                foreach ($schools_query->result() as $row) {
                                    echo '<option value="' . $row->sc_name . '" ';
                                    if (isset($_REQUEST['school']) && $_REQUEST['school'] == $row->sc_name)
                                        echo 'selected="selected" ';
                                    echo '>' . strtoupper($row->sc_name) . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class = "col-md-3" >

                            <select class="selectpicker" onchange="this.form.submit()" data-style="btn-success" name="club" data-width=100% role="menu" aria-labelledby="dropdownMenu1">
                                <option value="%" >ALL</a></option>
                                <?php
                                $schools_query = $this->db->query("select c_name,c_full_name from clubs");
                                foreach ($schools_query->result() as $row) {
                                    echo '<option value="' . $row->c_name . '" ';
                                    if (isset($_REQUEST['club']) && $_REQUEST['club'] == $row->c_name)
                                        echo 'selected="selected" ';
                                    echo '>' . strtoupper($row->c_full_name) . '</option>';
                                }
                                ?>
                            </select>   
                        </div>

                        <div class = "col-md-3" style=" ">
                            <select class="selectpicker" onchange="this.form.submit()" data-style="btn-success" name="type" data-width=100% role="menu" aria-labelledby="dropdownMenu1">
                                <option value="%" >ALL</a></option>
                                <?php
                                $options = array("competition", "workshop", "conference", "lecture");
                                foreach ($options as $option) {
                                    echo '<option value="' . $option . '" ';
                                    if (isset($_REQUEST['type']) && $_REQUEST['type'] == $option)
                                        echo 'selected="selected" ';
                                    echo '>' . ucfirst($option) . '</option>';
                                }
                                ?>
                                }

                                ?>
                            </select>
                        </div>
                    </form>
                </div><!--a row inside another row-->

            </div><!--bootstrap well ends-->

            <!--code for FILTER menu ends-->

            <!--page content starts-->

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Upcoming Events</h3>
                </div>
                <div class="panel-body">
                    <?php
                        date_default_timezone_set("Asia/Kolkata");
                        $feat_event_q = $this->db->query("SELECT * FROM events, featured_events WHERE events.id = featured_events.event_id AND event_date >= '" . date('Y-m-d') . "' " . $big_event_filter);
                        foreach($feat_event_q->result() as $fe)
                        {

                    ?>
                        <div class = "col-md-4">
                            <div class = "thumbnail feat_event" style="height:350px;">
                                <a href = "<?php echo site_url('events/read_events?id=' . $fe->event_id) ?>">
                                    <img src = "<?php echo base_url($fe->image_path) ?>" alt = "poster" style="height:155px; width:100%;">
                                </a>
                                <div class = "caption">
                                    <h3><center><b><?= $fe->title ?></b></center></h3>
                                    <?= $fe->short_desc ?>
                                    <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                                </div>
                            </div>
                        </div>

                    <?php
                        }
                    ?>

                    <?php
                    $condition_q = "";
                    $original_q = "SELECT * FROM events WHERE events.id NOT IN(select event_id from featured_events) AND event_date >= '" . date('Y-m-d')  . "' " . $big_event_filter;
					if (isset($_REQUEST['school']) && $_REQUEST['school'] != "")
                        $condition_q .= " and school like '" . $_REQUEST['school'] . "' ";
                    if (isset($_REQUEST['club']) && $_REQUEST['club'] != "")
                        $condition_q .= " and club like '" . $_REQUEST['club'] . "' ";
                    if (isset($_REQUEST['type']) && $_REQUEST['type'] != "")
                        $condition_q .= " and type like '" . $_REQUEST['type'] . "' ";


                    $upcoming_events = $this->db->query($original_q . $condition_q . "order by event_date ");
                    //$count = 0; // removing this because all "upcoming events" are important. And thus all should be displayed.  
                    foreach ($upcoming_events->result() as $row) {
                      //  $count++;
                       // if ($count > 10)
                        //    break;
                        ?>

                        <div class = "col-md-4">
                            <div class = "thumbnail" style="height:350px;">
                                <a href = "<?php echo site_url('events/read_events?id=' . $row->id) ?>">
                                    <img src = "<?php echo base_url($row->image_path) ?>" alt = "poster" style="height:155px; width:100%;">
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

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Past Events</h3>
                </div>
                <div class="panel-body">



                    <?php
                    $original_q = "select id, title, short_desc, image_path, event_date from events where event_date < '" . date('Y-m-d'). "' " . $big_event_filter;
                    $past_events = $this->db->query($original_q . $condition_q . " order by event_date desc");
                    $count = 0; // since front page displays 6 past events only
                    foreach ($past_events->result() as $row) {
                        $count++;
                        if ($count > 6)
                            break;
                        ?>

                        <div class = "col-md-4" >
                            <div class = "thumbnail" style="height:350px;">
                                <a href = "<?php echo site_url('events/read_events?id=' . $row->id) ?>">
                                    <img src = "<?php echo base_url($row->image_path) ?>" alt = "poster" style="height:155px; width:100%;">
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
				<center><a type="button" class="btn btn-xs btn-default" href="<?=site_url('events/all_past_events')?>">VIEW ALL</a></center><br/>
            </div>

        </div><!--for colmd9-->

        <!--row ends in extras file-->
        <!--container ends in extras file-->