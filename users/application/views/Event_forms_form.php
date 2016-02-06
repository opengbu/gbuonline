<?php

/* 
 * Created on : Feb 7, 2016, 4:45:49 AM
 * Author     :Varun Garg <varun.10@live.com>
 
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

?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    $events_q = $this->db->query("select id, title from events");
    $events_r = $events_q->result();
    foreach ($events_r as $row) {
        $events[$row->id] = $row->title;
    }
    ?>

    <label>Event</label><br />
    <?php
    echo form_dropdown('event_id', $events, set_value('event_id', @$event_id), 'class="selectpicker"');
    ?>
    <br /><br />
    <label>Max Participants</label>
    <input type="text" class="form-control" name="max_participants" value="<?php echo set_value('max_participants', @$max_participants); ?>"/>
    <br>
    <label>Additional Field Title (Example Team name etc, you can also leave this blank)</label>
    <input type="text" class="form-control" name="extra_info_title" value="<?php echo set_value('extra_info_title', @$extra_info_title); ?>"/>
    <br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>
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