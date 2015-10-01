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
        var x = confirm("Do you want to delete this event?");
        if (x == true)
            location.href = "<?= base_url() ?>" + "/Events/delete?event_id=" + id;
    }
</script>
<div class="col-sm-10">    
    <?php
    $current_user_id = $this->session->userdata('user_id');
    $current_user_type = $this->session->userdata('type');

    $query2 = $this->db->query('select id,school,article_name,publishing_date,user_id from events');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query2->result() as $row2) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                    echo $row2->article_name;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    echo $row2->school;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    echo $row2->publishing_date;
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
    