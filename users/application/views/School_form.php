<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link type="text/css" rel="stylesheet" href="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    ?>

    <label>School Name</label>
    <input type="text" class="form-control" name="sc_name" value="<?php echo set_value('sc_name', @$sc_name); ?>"/>
    <br />
    <label>Shool's Full Name(example: School Of Vocational And Applied Sciences)</label>
    <input type="text" class="form-control" name="sc_full_name" value="<?php echo set_value('sc_full_name', @$sc_full_name); ?>"/>
    <br>
    <label>Tagline(example: Discover Yourself...)</label>
    <input type="text" class="form-control" name="tagline" value="<?php echo set_value('tagline', @$tagline); ?>"/>
    <br>
    <label>About School</label>
    <textarea name="about_us" class="jqte-test" value=""><?php echo set_value('about_us', @$about_us); ?></textarea>
    <br>
    <label>Course Structure</label>
    <textarea name="course_structure" class="jqte-test"  value=""><?php echo set_value('course_structure', @$course_structure); ?></textarea>
    <br>
    <label>Faculty</label>
    <textarea name="faculty" class="jqte-test"  value=""><?php echo set_value('faculty', @$faculty); ?></textarea>
    <br>
    <label>Placements</label>
    <textarea name="placements" class="jqte-test"  value=""><?php echo set_value('placements', @$placements); ?></textarea>
    <br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>
<script>
    $('.jqte-test').jqte();

    // settings of status
    var jqteStatus = true;
    $(".status").click(function ()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status": jqteStatus})
    });
</script>