<script>
    function del_ask(id)
    {
        var x = confirm("Do you want to delete this post?");
        if (x == true)
            location.href = "<?= base_url() ?>" + "index.php/delete_post/index?id=" + id;
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
                    if ($current_user_type == "admin" || $row2->user_id == $current_user_id)
                        echo '<a class="btn btn-xs btn-default" href="' . base_url() . "index.php/edit_post/index?id=$row2->id" . '"><i class="fa fa-pencil fa-fw"></i> Edit</a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>
                </div>

                <div class="col-sm-2">
                    <?php
                    if ($row2->user_id == $current_user_id || $current_user_type == "admin") {
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
    