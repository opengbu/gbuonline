<script>
function del_ask(str)
{
        var x = confirm("Do you want to delete "+str+"?\nAll posts regarding it school will also be deleted");
        if(x==true)location.href = "delete_school/index/"+str;
}
</script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$current_user_type = $this->session->userdata('type');

$query = $this->db->query('select * from schools');
echo '<ul class="nav nav-list col-sm-10">';
foreach ($query->result() as $row)
{
    ?>
            <li class="list-group-item">
            <div class="row">
            <div class="col-sm-6">
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
            if ($current_user_type=="admin") echo '<a href="'. base_url()."index.php/Edit_table/index/$row->sc_name".'">Edit as Admin</a>';
            else echo "<font color='gray'>You cant edit this</font>";
            ?>
            </div>
            <div class="col-sm-2">
            <?php
            if ($current_user_type=="admin") 
            {
           //     $this->session->set_flashdata('todelete',$);
                ?>
                <button onclick="del_ask('<?=$row->sc_name?>')" class="btn btn-default">Delete</button>  
                <?php
            }
            else echo "<font color='gray'>You cant delete this</font>";
            ?>
                
            </div>
            </div>
            </li>
      <?php
}