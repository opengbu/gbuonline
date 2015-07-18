<?php
/*
 *  Created on :Jul 16, 2015, 11:49:45 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-8" >

    <?php echo form_open('new_club'); ?>

    <label>Club Name (example: programming)</label>
    <input type="text" class="form-control" name="c_name"/>
    <br />
    <label>Clubs's Full Name(example: Programming club)</label>
    <input type="text" class="form-control" name="c_full_name"/>
    <br>
    <label>Tagline(example: Discover Yourself...)</label>
    <input type="text" class="form-control" name="tagline"/>
    <br>
    <label>About Club</label>
    <textarea value="" name="about_us" class=""  ></textarea>
    <br>
    <label>Faculty In charge</label>
    <textarea value="" name="faculty" class=""  ></textarea>
    <br>
    <label>Student in Charge</label>
    <textarea value="" name="students" class=""  ></textarea>
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
