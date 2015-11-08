<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 

 */
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Kolkata");
$schools_q = $this->db->query("select sc_name, sc_full_name from schools");
$schools_r = $schools_q->result();
foreach ($schools_r as $row) {
    $schools[$row->sc_name] = $row->sc_full_name;
}
$clubs_q = $this->db->query("select c_name, c_full_name from clubs");
$clubs_r = $clubs_q->result();
$clubs['%'] = "ALL";
foreach ($clubs_r as $row) {
    $clubs[$row->c_name] = $row->c_full_name;
}

function add_prefix(&$item1, $key, $prefix) {
    $item1 = $prefix . $item1;
}
?>
<link type="text/css" rel="stylesheet" href="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-10">
    <?php echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    ?>

    <label>Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo set_value('title', @$title); ?>">
    <br />
    <label>Description</label>
    <textarea value="" name="description" class="jqte-test"  ><?php echo set_value('description', @$description); ?></textarea>
    <br />
    <label>Short description</label>
    <textarea  name="short_desc" class="jqte-test"><?php echo set_value('short_desc', @$short_desc); ?></textarea>
    <br />

    <label>School</label><br />
    <?php
    echo form_dropdown('school', $schools, set_value('school', @$school), 'class="selectpicker"');
    ?>
    <br /><br />

    <label>Featured Image</label><br />
    <?php
    $this->load->helper('file');
    $files = get_filenames("../user_uploads/events");
    array_walk($files, "add_prefix", 'user_uploads/events/');
    $files = array_combine($files, $files);
    echo form_dropdown('image_path', $files, set_value('image_path', @$image_path), 'class="selectpicker" data-width="60%"');
    ?>

    <br /><br />

    <label>Club</label><br />
    <?php
    echo form_dropdown('club', $clubs, set_value('club', @$club), 'class="selectpicker"');
    ?>
    <br /><br />


    <label>Type</label><br />
    <?php
    $options = array("%" => "ALL", "competition" => "Competition", "workshop" => "Workshop", "conference" => "Conference", "lecture" => "Lecture");
    echo form_dropdown('type', $options, set_value('type', @$type), 'class="selectpicker"');
    ?>
    <br /><br />

    <label>Event date  </label>
	<?php
		if (isset($event_date)) $m_date = $event_date;
		else 	$m_date = date('Y-m-d');
	?>
    <input type="text"  name="event_date" value="<?=set_value('event_date', @$event_date)?>" class="form-control" />

    <br />
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Save" class="btn btn-default"/></div>
</form>
<script>
    $('.jqte-test').jqte();

    // settings of status
    var jqteStatus = true;
    $(".status").click(function ()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status": jqteStatus})
    });
</script>
</div>
