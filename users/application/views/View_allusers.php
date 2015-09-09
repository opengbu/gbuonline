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
            location.href = "delete_user/index/" + str;
    }
</script>
<div class="col-sm-10">
    <?php
    $current_user_id = $this->session->userdata('user_id');
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from users');
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
                    <?php
                    if ($row->type == 'admin')
                        echo '<font color = "green"><b>' . $row->type . '</b></font>';
                    else if ($row->type == 'superuser')
                        echo '<font color = "blue"><b>' . $row->type . '</b></font>';
                    else
                        echo $row->type;
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php
                    echo $row->email;
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    if ($row->user_id == $current_user_id || $this->permissions->level() >= 4)
                        echo '<a class="btn btn-xs btn-default" href="' . base_url() . "index.php/User_controls/CreateOrUpdate?user_id=$row->user_id" . '"><i class="fa fa-pencil fa-fw"></i>  Edit  </a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php
                    if ($row->user_id == $current_user_id)
                        echo "<font color='gray'>You cant delete yourself</font>";
                    else if ($this->permissions->level() >= 4) {
                        ?>
                        <a onclick="del_ask('<?php echo$row->user_id ?>', '<?php echo$row->username ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  

                        <?php
                    } else
                        echo "<font color='gray'>You cant delete this user</font>";
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