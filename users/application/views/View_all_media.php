<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
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