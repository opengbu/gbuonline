<div class="col-sm-10">
    <?php
    $q = $this->db->query("select id,roll_number,title,status from blog");

    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($q->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                    echo $row->title;
                    ?>
                </div>
                <div class ="col-sm-4">
                    <?php
                    echo $row->roll_number;
                    ?>
                </div>

                <div class ="col-sm-2">
                    <?php
                    if ($row->status == 0)
                        echo "<span class='label label-warning'>Pending</label>";
                    else if ($row->status == 2)
                        echo "<span class='label label-danger'>Rejected</label>";
                    else
                        echo "<span class='label label-success'>Accepted</sapn>";
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                    if ($this->session->userdata('type') == "admin")
                        echo '<a class="btn btn-xs btn-primary pull-right" href="' . base_url() . 'index.php/blog_geass/index/' . $row->id . '">Review</a>';
                    else
                        echo "You cant take Actions";
                    ?>
                </div>
            </div>
        </li>
    <?php
}
echo '</ul>';
?>
</div>