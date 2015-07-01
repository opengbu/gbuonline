<?php //echo validation_errors(); 
//echo $this->session->userdata('type');
?>  
<link type="text/css" rel="stylesheet" href="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.css'?>">
<script type="text/javascript" src="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.min.js'?>" charset="utf-8"></script>
<div class="col-sm-6" >
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
<textarea name="about_us" class="jqte-test" value=""><?=$row->about_us?></textarea>
<br>
<label>Course Structure</label>
<textarea name="course_structure" class="jqte-test"  value=""><?=$row->course_structure?></textarea>
<br>
<label>Faculty</label>
<textarea name="faculty" class="jqte-test"  value=""><?=$row->faculty?></textarea>
<br>
<label>Placements</label>
<textarea name="placements" class="jqte-test"  value=""><?=$row->placements?></textarea>
<br>
<?php
    echo '<label><font color="red">'.validation_errors().'</font></label>';
?>
<br><br>
<div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>
<?php
}
?>
</div>
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