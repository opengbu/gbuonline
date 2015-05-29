<?php
//echo $this->session->userdata('type');
?>
<link type="text/css" rel="stylesheet" href="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.css'?>">
<script type="text/javascript" src="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.min.js'?>" charset="utf-8"></script>
             
<?php echo form_open('new_article'); ?>

<label>Username</label>
<input type="text" class="form-control" name="username" value="<?=$this->session->userdata('username')?>" size="50"  readonly/>

<label>user_id</label>
<input type="text" class="form-control" name="user_id" value="<?=$this->session->userdata('user_id')?>" size="50" readonly=""/>

<label>Title</label>
<input type="text" name="article_name" value="" size="50" class="form-control">

<input type="textarea" value="Enter the post" name="article" class="jqte-test"  ></textarea>

<label>Publishing date</label>
<input type="text" value="<?=date('Y-m-d');?>" name="publishing_date"class="form-control">


<label>School</label>
<select name="school_name" class="form-control">
<?php
$query=  $this->db->query("select *  from schools");
foreach ($query->result() as $row)
{
    echo '<option value="'.$row->sc_name.'">'.$row->sc_full_name.'</option>';
    //    <option value="Milk">Fresh Milk</option>
    //  <option value="Cheese">Old Cheese</option>
}
?>
</select>
<br>
<?php
    echo '<label><font color="red">'.validation_errors().'</font></label>';
?>
<div><input type="submit" value="Publish" class="btn btn-default"/></div>
</form>
<script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>