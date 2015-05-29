<script>
function del_ask(str,n)
{
        var x = confirm("Do you want to delete "+n+"?");
        if(x==true)location.href = "delete_user/index/"+str;
}
</script>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
$current_user_id = $this->session->userdata('user_id');
$current_user_type = $this->session->userdata('type');

$query = $this->db->query('select * from users');
echo '<ul class="nav nav-list col-sm-10">';
foreach ($query->result() as $row)
{
    ?>
            <li class="list-group-item">
            <div class="row">
            <div class="col-sm-5">
            <?php 
            echo $row->username;
            ?>
            </div>
            <div class="col-sm-2">
            <?php 
            echo $row->email;
            ?>
            </div>
            <div class="col-sm-2">
             <?php
             if ($row->user_id == $current_user_id) echo '<a href="'. base_url()."index.php/edit_user/index/$row->user_id".'">Edit</a>';
             else if ($current_user_type=="admin") echo '<a href="'. base_url()."index.php/edit_user/index/$row->user_id".'">Edit as Admin</a>';
            else echo "<font color='gray'>You cant edit this</font>";
             ?>
             </div>
             <div class="col-sm-3">
             <?php
             if ($row->user_id == $current_user_id) echo "<font color='gray'>You cant delete yourself</font>";
             else if ($current_user_type=="admin") {
                 //echo '<a href="'. base_url()."index.php/delete_user/index/$row->user_id".'">Delete as Admin</a>';
             ?>
                 <button onclick="del_ask('<?=$row->user_id?>','<?=$row->username?>')" class="btn btn-default">Delete as Admin</button>  
                
             <?php    
             }
                 else echo "<font color='gray'>You cant delete this user</font>";
             
             ?>
             </div>
            </div>
            </li>
      <?php
}