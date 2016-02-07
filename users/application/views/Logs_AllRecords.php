<?php
/*
 *  Created on :Sep 30, 2015, 3:15:11 AM
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
    var count = 1;
</script>

<div class ="col-sm-10">
    <?php
    $query = $this->db->query('select logs.*,users.username from logs,users where logs.user_id = users.user_id');
    ?>
    <ul class="nav nav-list col-sm-12">
        <?php
        foreach ($query->result() as $row) {
            ?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-2">
                        <script>
                            document.write(count + ". ");
                            count++;
                        </script>

                        <?php
                        echo $row->date;
                        ?>
                    </div>

                    <div class="col-sm-1">
                        <?php
                        echo $row->time;
                        ?>
                    </div>

                    <div class="col-sm-2">
                        <?php
                        echo $row->username;
                        ?>
                    </div>

                    <div class="col-sm-7">
                        <?php
                        echo $row->action;
                        ?>
                    </div>

                </div>
            </li>
            <?php
        }
        ?>
    </ul>
</div>