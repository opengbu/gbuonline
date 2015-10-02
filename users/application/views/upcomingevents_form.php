<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
echo form_open('/Manage_upcoming/save');
?>
<div class="col-sm-4">

    <?php
    for ($i = 1; $i <= 5; $i++) {
        $find_upcoming_query = $this->db->query("select event_id from upcoming_events where id = '$i'");
        foreach ($find_upcoming_query->result() as $res) {
            $active = $res->event_id;
        }

        $q = $this->db->query('select id,school,article_name from events');
        echo '<label> Event ' . $i . '</label>';
        echo '<select name="id' . $i . '" class = "selectpicker" data-width="100%">';
        echo '<option value="-1" > Blank </option>';

        foreach ($q->result() as $row) {
            echo '<option value = "' . $row->id . '" ';
            if ($row->id == $active)
                echo 'selected="selected" ';
            echo '>' . $row->article_name . ' (' . $row->school . ')';
            echo '</option>';
        }
        echo '</select><br /><br />';
    }
    ?>
    <div><input type="submit" value="Save List" class="btn btn-default"/></div>
</form>
</div>