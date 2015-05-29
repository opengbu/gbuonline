<?php //echo validation_errors(); 
//echo $this->session->userdata('type');
$scl=$this->session->userdata('edit_scl');
$id=$this->session->userdata('edit_id');

$query = $this->db->query("select * from $scl where id = '$id'");
foreach($query->result() as $row)
{
    //$uname = $row->username;
    //$uid = $row->user_id;
    $aname = $row->article_name;
    $article = $row->article;
    $adate = $row->publishing_date;
}
?>
<link type="text/css" rel="stylesheet" href="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.css'?>">
<script type="text/javascript" src="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.min.js'?>" charset="utf-8"></script>
             
<?php echo form_open("edit_post/index?scl=$scl&id=$id"); ?>
<input type="hidden" name="scl" value="<?=$scl?>" />
<input type="hidden" name="id" value="<?=$id?>" />

<!--
<label>Username</label>
<input type="text" class="form-control" name="username" value="" size="50"  readonly/>

<label>user_id</label>
<input type="text" class="form-control" name="user_id" value="" size="50" readonly=""/>
!-->
<label>Title</label>
<input type="text" name="article_name" value="<?=$aname?>" size="50" class="form-control">

<input type="textarea" value="<?=$article?>" name="article" class="jqte-test"  ></textarea>

<label>Publishing date</label>
<input type="text" value="<?=$adate?>" name="publishing_date"class="form-control">


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
<div><input type="submit" value="Update" class="btn btn-default"/></div>
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