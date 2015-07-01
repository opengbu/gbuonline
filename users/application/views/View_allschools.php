<script>
    function del_ask(str)
    {
        var x = confirm("Do you want to delete " + str + "?\nAll events regarding this school will also be deleted");
        if (x == true)
            location.href = "delete_school/index/" + str;
    }
</script>
<div class ="col-sm-10">
    <?php
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from schools');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-5">
    <?php
    echo $row->sc_full_name;
    ?>
                </div>
                <div class="col-sm-2">
    <?php
    echo $row->sc_name;
    ?>

                </div>
                <div class="col-sm-2">

    <?php
    if ($current_user_type == "admin")
        echo '<a class="btn btn-xs btn-default " href="' . base_url() . "index.php/Edit_table/index/$row->sc_name" . '"><i class="fa fa-pencil fa-fw"></i>Edit</a>';
    else
        echo "<font color='gray'>You cant edit this</font>";
    ?>

                </div>
                <div class="col-sm-3">
                    <?php
                    if ($current_user_type == "admin") {
                        ?>
                        <a onclick="del_ask('<?php echo $row->sc_name ?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
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