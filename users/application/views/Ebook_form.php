<?php
/*
 *  Created on :Sep 10, 2015, 5:37:42 AM
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

?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    $schools_q = $this->db->query("select sc_name, sc_full_name from schools");
    $schools_r = $schools_q->result();
    foreach ($schools_r as $row) {
        $schools[$row->sc_name] = $row->sc_full_name;
    }
    ?>

    <label>School</label><br />
    <?php
    echo form_dropdown('sc_name', $schools, set_value('sc_name', @sc_name), 'class="selectpicker"');
    ?>
    <br /><br />
    <label>Department (Example Robotics)</label>
    <input type="text" class="form-control" name="dept_name" value="<?php echo set_value('dept_name', @$dept_name); ?>"/>
    <br>
    <label>Book's name</label>
    <input type="text" class="form-control" name="book_name" value="<?php echo set_value('book_name', @$book_name); ?>"/>
    <br>
    <label>About the book</label>
    <textarea name="book_info" class="jqte-test" value=""><?php echo set_value('book_info', @$book_info); ?></textarea>
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