<?php //echo validation_errors(); 
//echo $this->session->userdata('type');
?>  
<link type="text/css" rel="stylesheet" href="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.css'?>">
<script type="text/javascript" src="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.min.js'?>" charset="utf-8"></script>
 
<?php
$tname = $this->session->userdata('edit_table');
$q = $this->db->query("select * from schools where sc_name = '$tname'");
foreach ($q->result() as $row)
{
  

echo form_open('edit_table/index/'.$tname); ?>


<label>Table Name</label>
<input type="text" class="form-control" name="sc_name" value="<?=$row->sc_name?>" readonly/>

<label>Shool's Full Name(example: School Of Vocational And Applied Sciences)</label>
<input type="text" class="form-control" name="sc_full_name" value="<?=$row->sc_full_name?>"/>
<br>
<label>About School</label>
<input type="textarea" name="about_us" class="jqte-test"  value="<?=$row->about_us?>"></textarea>

<label>Course_structure</label>
<input type="textarea"name="course_structure" class="jqte-test"  value="<?=$row->course_structure?>"></textarea>

<label>Faculty</label>
<input type="textarea" name="faculty" class="jqte-test"  value="<?=$row->faculty?>"></textarea>

<label>Events</label>
<input type="textarea" name="events" class="jqte-test"  value="<?=$row->events?>"></textarea>

<label>placements</label>
<input type="textarea"  name="placements" class="jqte-test"  value="<?=$row->placements?>"></textarea>

<?php
    echo '<label><font color="red">'.validation_errors().'</font></label>';
?>
<div><input type="submit" value="Publish" class="btn btn-default"/></div>
</form>
<?php
}
?>
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