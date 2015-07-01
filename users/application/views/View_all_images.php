<script>
   function del_ask(id)
    {
        var x = confirm("Do you want to delete "+id+" ?");
        if (x == true)
            location.href = "<?= base_url() ?>" + "index.php/manage_uploads/delete?image=" + id;
    }
</script>

<div class="col-sm-10">
    <ul class="nav nav-list col-sm-12">
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-12">
                    <b>Relative path (can be used in events)</b>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </li>
        <?php
        $names = get_filenames("../resources/user_uploads");
        if (is_array($names) || is_object($names)) {
            foreach ($names as $name) {
                ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-8">
                            <?php
                            echo '<a href = "' . dirname(base_url()) . '/resources/user_uploads/' . $name . '">  resources/user_uploads/' . $name . '</a><br />';
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <?php
                            if ($this->session->userdata('type') == "admin")
                            {
                                ?>
                            <button onclick="del_ask('<?= $name?>')" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>  
                            <?php
                        } else
                        echo "<font color='gray'>You cant delete this</font>";
                        ?>
                    </div>
                </div>
            </li>
            <?php
        }
    }
    ?>
    </ul>
</div>  