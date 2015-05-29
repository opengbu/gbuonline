<?php
$q = $this->db->query("select id,roll_number,title,status from blog");
        
        echo '<ul class="nav nav-list col-sm-10">';
        foreach ($q->result() as $row)
        {
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
                    if($row->status == 0 ) echo "<font color='red'>Pending</font>";
                    else if ($row->status == 2) echo "<font color='gray'>Rejected</font>";
                    else echo "<font color='green'>Accepted</font>";
                    ?>
                </div>
                <div class="col-sm-2">
                    <?php
                        if ($this->session->userdata('type')=="admin") echo '<a href="'.base_url().'index.php/blog_geass/index/'.$row->id.'">Review</a>';
                        else echo "You cant take Actions";
                        ?>
                </div>
            </div>
            </li>
            <?php
        }
        echo '</ul>';
       ?>