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
<script>
    function del_ask(id)
    {
        var x = confirm("Do you want to delete this event?");
        if (x == true)
            location.href = "<?= base_url() ?>" + "/Events/delete?event_id=" + id;
    }
</script>
<div class="col-sm-10">    
    <?php
    $current_user_id = $this->session->userdata('user_id');
    $current_user_type = $this->session->userdata('type');

    $query2 = $this->db->query('select id,school,title,event_date,user_id from events');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query2->result() as $row2) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                    echo $row2->title;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    echo $row2->school;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    echo $row2->event_date;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    if ($this->permissions->get_level() >= 2 || $row2->user_id == $current_user_id)
                        echo '<a class="btn btn-xs btn-default" href="' . base_url() . "Events/CreateOrUpdate?event_id=$row2->id" . '"><i class="fa fa-pencil fa-fw"></i> Edit</a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>
                </div>

                <div class="col-sm-2">
                    <?php
                    if ($this->permissions->get_level() >= 2 || $row2->user_id == $current_user_id) {
                        ?>
                        <button onclick="del_ask('<?= $row2->id ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>  
                        <?php
                    } else
                        echo "<font color='gray'>You cant delete this</font>";
                    ?>
                </div>

            </div>
        </li>
        <?php
    }
    echo "</ul></div>";
    