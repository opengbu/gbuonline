<?php

/* 
 *  Created on :Sep 10, 2015, 5:52:50 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
    function del_ask(str,id)
    {
        var x = confirm("Do you want to delete " + str + "?");
        if (x === true)
            location.href = "<?php echo base_url() ?>" + "Ebooks/delete?ebook_id=" + id;
    }
</script>
<div class ="col-sm-10">
    <?php
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from ebooks');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-3">
                    <?php
                    echo $row->book_name;
                    ?>
                </div>
                
                <div class="col-sm-3">
                    <?php
                    echo $row->dept_name;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    echo $row->sc_name;
                    ?>

                </div>
                <div class="col-sm-2">

                    <?php
                    if ($this->permissions->get_level() > 0)
                        echo '<a class="btn btn-xs btn-default " href="' . base_url() . "Ebooks/CreateOrUpdate?ebook_id=$row->id" . '"><i class="fa fa-pencil fa-fw"></i>Edit</a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>

                </div>
                <div class="col-sm-2">
                    <?php
                    if ($this->permissions->get_level() == 2 || $this->permissions->get_level() >= 4) {
                        ?>
                        <a onclick="del_ask('<?php echo $row->sc_name ?>','<?php echo $row->id ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
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