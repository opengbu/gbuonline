<?php
/*
 *  Created on :Sep 10, 2015, 7:24:49 AM
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

function add_prefix(&$item1, $key, $prefix) {
    $item1 = $prefix . $item1;
}

?>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    $schools_q = $this->db->query("select sc_name, sc_full_name from schools");
    $schools_r = $schools_q->result();
    foreach ($schools_r as $row) {
        $schools[$row->sc_name] = $row->sc_full_name;
    }
    ?>

    <label>Paper Name (Example Maths 4)</label>
    <input type="text" class="form-control" name="paper_name" value="<?php echo set_value('paper_name', @$paper_name); ?>"/>
    <br>

    <label>School</label><br />
    <?php
    echo form_dropdown('sc_name', $schools, set_value('sc_name', @$sc_name), 'class="selectpicker"');
    ?>
    <br /><br />

    <label>Select File</label><br />
    <?php
    $this->load->helper('file');
    $files = get_filenames("../user_uploads/exams");
    array_walk($files, "add_prefix", 'user_uploads/exams/');
    $files = array_combine($files, $files);
    echo form_dropdown('image_path', $files, set_value('image_path', @$image_path), 'class="selectpicker" data-width="60%"');
    ?>

    <br /><br />

    <label>Year (Example 2015)</label>
    <input type="text" class="form-control" name="year" value="<?php echo set_value('year', @$year); ?>"/>
    <br>
    <label>Semester</label>
    <input type="text" class="form-control" name="semester" value="<?php echo set_value('semester', @$semester); ?>"/>
    <br>

    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>