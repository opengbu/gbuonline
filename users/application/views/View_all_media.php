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
        var x = confirm("Do you want to delete " + id + " ?");
        if (x == true)
            location.href = "<?= base_url() ?>" + "index.php/manage_uploads/delete?image=" + id;
    }
</script>

<div class="col-sm-10">
    <ul class="nav nav-list col-sm-12">
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-12">
                    <b>Relative path (can be used in events,notices,exams etc)</b>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </li>
        <?php
        $storage = ['events', 'notices', 'exams'];
        foreach ($storage as $sub_path) {
            $names = get_filenames("../user_uploads/" . $sub_path);
            if (is_array($names) || is_object($names)) {
                foreach ($names as $name) {
                    ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-8">
                                <?php
                                echo '<a href = "' . dirname(base_url()) . '/user_uploads/' . $sub_path .
                                '/' . $name .
                                '">  ' . $sub_path . '/'
                                . $name . '</a><br />';
                                ?>
                            </div>
                            <div class="col-sm-4">
                                <button onclick="del_ask('<?= $sub_path . '/' . $name ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>  
                            </div>
                    </li>
                    <?php
                }
            }
        }
        ?>
    </ul>
</div>  