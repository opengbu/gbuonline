<script>
function del_ask(scl,id)
{
        var x = confirm("Do you want to delete this post?");
        if(x==true)location.href = "<?=base_url()?>"+"index.php/delete_post/index?scl="+scl+"&id="+id;
}
</script>
    
<?php
$current_user_id = $this->session->userdata('user_id');
$current_user_type = $this->session->userdata('type');
$qr ="";
        $c=1;
        $query1 = $this->db->query('select sc_name from schools');
        foreach($query1->result() as $row1)
        {
            if($c==1)
            {
                $qr=$qr."select id,article_name,user_id,publishing_date,'$row1->sc_name' as scl from $row1->sc_name";
                $c++;
            }
            else
            {
                $qr=$qr." union all select id,article_name,user_id,publishing_date,'$row1->sc_name' as scl from $row1->sc_name";
            }
        }
        
        $query2 =  $this->db->query($qr);
        echo '<ul class="nav nav-list col-sm-10">';
        foreach ($query2->result() as $row2)
        {
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
            echo $row2->scl;
            ?>
            </div>
             <div class="col-sm-2">
            <?php 
            echo $row2->publishing_date;
            ?>
            </div>
            <div class="col-sm-2">
                     <?php
             if ($row2->user_id == $current_user_id) echo '<a href="'. base_url()."index.php/edit_post/index?scl=$row2->scl&id=$row2->id".'">Edit</a>';
             else if ($current_user_type=="admin") echo '<a href="'. base_url()."index.php/edit_post/index?scl=$row2->scl&id=$row2->id".'">Edit as Admin</a>';
            else echo "<font color='gray'>You cant edit this</font>";
                 ?>
             </div>
            
            <div class="col-sm-2">
             <?php
             if ($row2->user_id == $current_user_id)
              {
                 ?>
                 <button onclick="del_ask('<?=$row2->scl?>','<?=$row2->id?>')" class="btn btn-default">Delete</button>  
             <?php
             
              }
             else if ($current_user_type=="admin")
             {
                 ?>
                 <button onclick="del_ask('<?=$row2->scl?>','<?=$row2->id?>')" class="btn btn-default">Delete as Admin</button>  
             <?php
             
             }
            else 
                echo "<font color='gray'>You cant edit this</font>";
                 ?>
             </div>
           
            </div>
            </li>
         <?php
        }
        echo "</ul>";