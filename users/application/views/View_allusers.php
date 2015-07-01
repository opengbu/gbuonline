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
                    if ($row->user_id == $current_user_id)
                        echo '<a class="btn btn-xs btn-default " width=100%" href="' . base_url() . "index.php/edit_user/index/$row->user_id" . '"><i class="fa fa-pencil fa-fw"></i>  Edit  </a>';
                    else if ($current_user_type == "admin")
                        echo '<a class="btn btn-xs btn-default" href="' . base_url() . "index.php/edit_user/index/$row->user_id" . '"><i class="fa fa-pencil fa-fw"></i>  Edit  </a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php
                    if ($row->user_id == $current_user_id)
                        echo "<font color='gray'>You cant delete yourself</font>";
                    else if ($current_user_type == "admin") {
                        //echo '<a href="'. base_url()."index.php/delete_user/index/$row->user_id".'">Delete as Admin</a>';
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
    ?>
</div>