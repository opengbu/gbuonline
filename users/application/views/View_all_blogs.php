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
<div class="col-sm-10">
    <?php
    $q = $this->db->query("select id,roll_number,title,status,full_name from blog,users where blog.user_id = users.user_id");

    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($q->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                    echo $row->title;
                    ?>
                </div>
                <div class ="col-sm-4">
                    <?php
                    echo $row->full_name;
                    ?>
                </div>

                <div class ="col-sm-2">
                    <?php
                    if ($row->status == 0)
                        echo "<span class='label label-warning'>Pending</span>";
                    else if ($row->status == 2)
                        echo "<span class='label label-danger'>Rejected</span>";
                    else if ($row->status == 3)
                        echo "<span class='label label-info'>Pending (Edited)</span>";
					else
                        echo "<span class='label label-success'>Accepted</span>";
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    if ($this->permissions->get_level() == 2 || $this->permissions->get_level() >= 4)
                        echo '<a class="btn btn-xs btn-primary pull-right" href="' . base_url() . 'index.php/blog_geass/index/' . $row->id . '">Review</a>';
                    else
                        echo "Content Head Only";
                    ?>
                </div>
            </div>
        </li>
    <?php
}
echo '</ul>';
?>
</div>