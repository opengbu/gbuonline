<?php //echo validation_errors(); 
//echo $this->session->userdata('type');
?>  
<link type="text/css" rel="stylesheet" href="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.css'?>">
<script type="text/javascript" src="<?=base_url().'application/views/common/'.'input/jquery-te-1.4.0.min.js'?>" charset="utf-8"></script>
 
<?php echo form_open('new_table'); ?>

<label>Table Name (example: sovas)</label>
<input type="text" class="form-control" name="sc_name"/>

<label>Shool's Full Name(example: School Of Vocational And Applied Sciences)</label>
<input type="text" class="form-control" name="sc_full_name"/>
<br>
<label>About School</label>
<input type="textarea" value="" name="about_us" class="jqte-test"  ></textarea>

<label>Course_structure</label>
<input type="textarea" value="" name="course_structure" class="jqte-test"  ></textarea>

<label>Faculty</label>
<input type="textarea" value="" name="faculty" class="jqte-test"  ></textarea>

<label>Events</label>
<input type="textarea" value="" name="events" class="jqte-test"  ></textarea>

<label>placements</label>
<input type="textarea" value="" name="placements" class="jqte-test"  ></textarea>

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