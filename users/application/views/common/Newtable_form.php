<?php
/* 
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-8" >

    <?php echo form_open('new_school'); ?>

    <label>School Name (example: sovas)</label>
    <input type="text" class="form-control" name="sc_name"/>
    <br />
    <label>School's Full Name(example: School Of Vocational And Applied Sciences)</label>
    <input type="text" class="form-control" name="sc_full_name"/>
    <br>
    <label>About School</label>
    <textarea value="" name="about_us" class=""  ></textarea>
    <br>
    <label>Course Structure</label>
    <textarea value="" name="course_structure" class=""  ></textarea>
    <br>
    <label>Faculty</label>
    <textarea value="" name="faculty" class=""  ></textarea>
    <br>
    <label>placements</label>
    <textarea value="" name="placements" class=""  ></textarea>
    <br><br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Publish" class="btn btn-default"/></div>
</form>
</div>
<script>
    $("textarea").jqte();
</script>