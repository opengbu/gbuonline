<?php
/*
 *  Created on :Jul 16, 2015, 11:49:45 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<link type="text/css" rel="stylesheet" href="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-8" >

    <?php echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']); ?>

    <label>Club Name (example: programming)</label>
    <input type="text" class="form-control" name="c_name" value="<?php echo set_value('c_name',@$c_name); ?>"/>
    <br />
    <label>Clubs's Full Name(example: Programming club)</label>
    <input type="text" class="form-control" name="c_full_name" value="<?php echo set_value('c_full_name',@$c_full_name); ?>"/>
    <br>
    <label>Tagline(example: Discover Yourself...)</label>
    <input type="text" class="form-control" name="tagline" value="<?php echo set_value('tagline',@$tagline); ?>"/>
    <br>
    <label>About Club</label>
    <textarea value="" name="about_us" class=""  ><?php echo set_value('about_us',@$about_us); ?></textarea>
    <br>
    <label>Faculty In charge</label>
    <textarea value="" name="faculty" class=""  ><?php echo set_value('faculty',@$faculty); ?></textarea>
    <br>
    <label>Student in Charge</label>
    <textarea value="" name="students" class=""  ><?php echo set_value('students',@$students); ?></textarea>
    <br><br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Save" class="btn btn-default"/></div>
</form>
</div>
<script>
    $("textarea").jqte();
</script>
