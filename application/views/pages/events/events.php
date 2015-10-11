<link rel="stylesheet" href="<?php echo $this->cdn->res_url() . 'users/application/views/common/' . 'css/bootstrap-select.min.css' ?>">
<script type="text/javascript" src="<?php echo $this->cdn->res_url() . 'users/application/views/common/' . 'js/bootstrap-select.min.js' ?>"></script>

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
/*
 * Note by Varun...
 * I am connecting (Front End) events with db on my own
 * because of too much delay
 */
?>
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
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
                    $condition_q = "";
                    $original_q = "select events.id, article_name, short_desc, image_path from events, upcoming_events where events.id = event_id ";
                    if (isset($_REQUEST['school']) && $_REQUEST['school'] != "")
                        $condition_q .= " and school like '" . $_REQUEST['school'] . "' ";
                    if (isset($_REQUEST['club']) && $_REQUEST['club'] != "")
                        $condition_q .= " and club like '" . $_REQUEST['club'] . "' ";
                    if (isset($_REQUEST['type']) && $_REQUEST['type'] != "")
                        $condition_q .= " and type like '" . $_REQUEST['type'] . "' ";


                    $upcoming_events = $this->db->query($original_q . $condition_q . "order by upcoming_events.id ");
                    //$count = 0; // removing this because all "upcoming events" are important. And thus all should be displayed.  
                    foreach ($upcoming_events->result() as $row) {
                      //  $count++;
                       // if ($count > 10)
                        //    break;
                        ?>

                        <div class = "col-md-4">
                            <div class = "thumbnail" style="height:350px;">
                                <a href = "<?php echo site_url('feat/read_events?id=' . $row->id) ?>">
                                    <img src = "<?php echo base_url($row->image_path) ?>" alt = "code-in-gbu" style="max-height:200px; width:100%;">
                                </a>
                                <div class = "caption">
                                    <h3><center><b><?= $row->article_name ?></b></center></h3>
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
                    date_default_timezone_set("Asia/Kolkata");
                    $original_q = "select id, article_name, short_desc, image_path, publishing_date from events where publishing_date < '" . date('Y-m-d') . "' ";

                    $past_events = $this->db->query($original_q . $condition_q . " order by publishing_date desc");
                    $count = 0; // since front page displays 6 past events only
                    foreach ($past_events->result() as $row) {
                        $count++;
                        if ($count > 6)
                            break;
                        ?>

                        <div class = "col-md-4" >
                            <div class = "thumbnail" style="height:350px;">
                                <a href = "<?php echo site_url('feat/read_events?id=' . $row->id) ?>">
                                    <img src = "<?php echo base_url($row->image_path) ?>" alt = "code-in-gbu" style="max-height:200px; width:100%;">
                                </a>
                                <div class = "caption">
                                    <h3><center><b><?= $row->article_name ?></b></center></h3>
                                    <?= $row->short_desc ?>
                                    <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
					
                </div>
				<center><a type="button" class="btn btn-xs btn-default" href="<?=site_url('feat/all_past_events')?>">VIEW ALL</a></center><br/>
            </div>

        </div><!--for colmd9-->

        <!--row ends in extras file-->
        <!--container ends in extras file-->