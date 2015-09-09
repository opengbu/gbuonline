<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<script>
    function del_ask(str, n)
    {
        var x = confirm("Do you want to delete " + n + "?");
        if (x == true)
            location.href = "<?= base_url() ?>" + "User_controls/delete?user_id=" + str;
    }
</script>
<div class="col-sm-10">
    <?php
    $current_user_id = $this->session->userdata('user_id');
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from users order by user_id');
    echo '<ul class="nav nav-list">';
    foreach ($query->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-2">
                    <?php
                    echo $row->username;
                    ?>
                </div>
                <div class="col-sm-2">
                    <font color ="<?= $this->permissions->get_color_code($row->type) ?>">
                    <?php
                    echo $this->permissions->get_full_type($row->type);
                    ?>
                    </font>
                </div>
                <div class="col-sm-3">
                    <?php
                    echo $row->roll_number;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    if ($row->user_id == $current_user_id ||
                            ($this->permissions->get_level() >= 2 &&
                            $this->permissions->check_if_greater($current_user_id, $row->user_id) == 1 )) {
                        echo '<a class="btn btn-xs btn-default" href="' . base_url() . "User_controls/CreateOrUpdate?user_id=$row->user_id" . '">'
                        . '<i class="fa fa-pencil fa-fw"></i>  Edit  </a>';
                    } else {
                        echo '<a class="btn btn-default btn-xs disabled"><i class="fa fa-pencil fa-fw"></i> Edit</a>';
                    }
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php
                    if ($row->user_id == $current_user_id)
                        echo "<font color='gray'>You cant delete yourself</font>";
                    else if ($this->permissions->get_level() >= 4 &&
                            $this->permissions->check_if_greater($current_user_id, $row->user_id) == 1) {
                        ?>
                        <a onclick="del_ask('<?php echo$row->user_id ?>', '<?php echo$row->username ?>')"
                           class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  

                        <?php
                    } else {
                        echo '<a class="btn btn-danger btn-xs pull-right disabled"><i class="fa fa-trash-o fa-lg"></i> Delete</a>';
                    }
                    ?>
                </div>
            </div>
        </li>
        <?php
    }
    echo '</ul>'
    ?>
    <br /><br />

</div>