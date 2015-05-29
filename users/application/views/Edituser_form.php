<?php //echo validation_errors(); 
//echo $this->session->userdata('type');
$userid=$this->session->userdata('edit_userid');
$query = $this->db->query("select * from users where user_id = '$userid'");
foreach($query->result() as $row)
{
    $uname = $row->username;
    $umail = $row->email;
}
?>  
<?php echo form_open("edit_user/index/$userid"); ?>

<label>Username</label>
<input type="text" class="form-control" name="username" value="<?=$uname?>"/>
<input type="hidden" class="form-control" name="user_id" value="<?=$userid?>"/>

<label>Email Address</label>
<input type="text" class="form-control" name="email" value="<?=$umail?>"/>

<?php 
if($this->session->userdata('type')=='admin')
{
    ?>
    <label>Type</label>
    <select name="type" class="form-control">
        <option value="admin">Website Administrator</option>
        <option value="user">General User</option>
    </select>
<?php
}
else
{
?>
    <input type="hidden" class="form-control" value="user" />
<?php
}
?>
<label>Password</label>
<input type="password" name="password" class="form-control">


<label>Confirm Password</label>
<input type="password" name="passconf" class="form-control">

<br>
<?php
    echo '<label><font color="red">'.validation_errors().'</font></label>';
?>
<div><input type="submit" value="Save" class="btn btn-default"/></div>
</form>
