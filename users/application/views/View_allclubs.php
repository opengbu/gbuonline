<?php
/*
 *  Created on :Jul 16, 2015, 11:36:45 AM
 *  Author        :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
    function del_ask(str, id)
    {
        var x = confirm("Do you want to delete " + str + "?\nAll events regarding this club will also be deleted");
        if (x === true)
            location.href = "<?php echo base_url() ?>" + "Clubs/delete?club_id=" + id;
    }
</script>
<div class ="col-sm-10">
    <?php
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from clubs');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-5">
                    <?php
                    echo $row->c_full_name;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    echo $row->c_name;
                    ?>

                </div>
                <div class="col-sm-2">

                    <?php
                    if ($this->permissions->get_level() > 0)
                        echo '<a class="btn btn-xs btn-default " href="' . base_url() . "Clubs/CreateOrUpdate?club_id=$row->id" . '"><i class="fa fa-pencil fa-fw"></i>Edit</a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>

                </div>
                <div class="col-sm-3">
                    <?php
                    if ($this->permissions->get_level() == 2 || $this->permissions->get_level() >= 4) {
                        ?>
                        <a onclick="del_ask('<?php echo $row->c_name ?>', '<?php echo $row->id ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
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

