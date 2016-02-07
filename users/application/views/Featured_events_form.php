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
?>
<?php
echo form_open('/Featured_events/save');
?>
<div class="col-sm-4">

    <?php
    for ($i = 1; $i <= 5; $i++) {
        $find_upcoming_query = $this->db->query("select event_id from featured_events where id = '$i'");
        foreach ($find_upcoming_query->result() as $res) {
            $active = $res->event_id;
        }

        $q = $this->db->query('select id,school,title from events');
        echo '<label> Event ' . $i . '</label>';
        echo '<select name="id' . $i . '" class = "selectpicker" data-width="100%">';
        echo '<option value="-1" > Blank </option>';

        foreach ($q->result() as $row) {
            echo '<option value = "' . $row->id . '" ';
            if ($row->id == $active)
                echo 'selected="selected" ';
            echo '>' . $row->title . ' (' . $row->school . ')';
            echo '</option>';
        }
        echo '</select><br /><br />';
    }
    ?>
    <div><input type="submit" value="Save List" class="btn btn-default"/></div>
</form>
</div>