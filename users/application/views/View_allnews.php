<?php
/*
 *  Created on :Jul 20, 2015, 4:13:32 PM
 *  Author        :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
    function del_ask(str, id)
    {
        var x = confirm("Do you want to delete " + str + "?\n");
        if (x == true)
                location.href = <?= base_url() ?>."/News/Delete?news_id=" + id;
    }
    var count = 1;
</script>
<div class ="col-sm-10">
    <?php
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from news');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-7">
                    <script>
                        document.write(count + ". ");
                        count++;
                    </script>
                    <?php
                    echo $row->title;
                    ?>
                </div>
                <div class="col-sm-2">

                    <?php
                    if ($this->permissions->get_level() >= 2 || $row->user_id == $this->session->userdata('user_id'))
                        echo '<a class="btn btn-xs btn-default " href="' . base_url() . "News/CreateOrUpdate?news_id=$row->id" . '"><i class="fa fa-pencil fa-fw"></i>Edit</a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>

                </div>
                <div class="col-sm-3">
                    <?php
                    if ($this->permissions->get_level() >= 2 || $row->user_id == $this->session->userdata('user_id')) {
                        ?>
                        <a onclick="del_ask('<?php echo $row->title ?>', <?= $row->id ?>)" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
                        <?php
                    } else
                        echo "<font color='gray'>You cant delete this</font>";
                    ?>

                </div>
            </div>
        </li>
        <?php
    }
    ?>
</div>

