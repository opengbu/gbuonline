<?php

$id = $this->session->userdata('bid');
echo form_open('Blog_geass/index/'.$id); 
$q = $this->db->query("select * from blog where id = '$id'");

?>
<div class="col-sm-10">

<ul class="nav nav-list col-sm-12">
    <div class="row ">
    <div class="col-sm-12 ">

    <?php
    foreach ($q->result() as $row)
{  
        ?>
        <ul class="nav nav-list well">
<li class="list-group-item">

    <div class="row ">
        <div class="col-sm-4">
            <label>Roll Number</label>
            <?=$row->roll_number?>
        </div>
    </div>
</li>
<li class="list-group-item">
    <div class="row ">
        <div class="col-sm-10">
            <label>Title</label>
            <?=$row->title?>
        </div>
    </div>
 </li>
 
<li class="list-group-item">
    <div class="row ">
        <div class="col-sm-10">
            <label>Status:</label>
            <?php
                if($row->status == 0 ) echo "<font color='red'>pending</font>";
                else if ($row->status == 2) echo "<font color='gray'>rejected</font>";
                else echo "<font color='green'>accepted</font>";
            ?>
        </div>
    </div>
 </li>
<li class="list-group-item">   
    <div class="row ">
        <div class="col-sm-12">
            <label>Description<br></label>
            <?=$row->description?>
        </div>
    </div>
</li>
        </ul>
    <?php
}
?>
        <label>Actions</label>
    <select name="status" value="<?=$row->status?>" class="selectpicker" data-width="100%">
        <option value="<?=$row->status?>">Pick:</option>
        <option value="0">mark as pending</option>
        <option value="1">Approve</option>
        <option value="2">Reject</option>
    </select>
        <br /><br />
        <div><input type="submit" value="Apply" class="btn btn-default"/></div>
</form>
    </div>