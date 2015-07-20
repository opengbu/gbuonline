<?php

/* 
 *  Created on :Jul 20, 2015, 4:30:35 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-8">
    <?php echo form_open('new_news'); ?>

    <label>Title</label>
    <input type="text" name="title" value="" size="50" class="form-control">
    <br />
    <label>Slug</label>
    <textarea value="" name="slug" class="jqte-test"  >Enter short description</textarea>
    <br />
    <label>Description</label>
    <textarea  name="text" class="jqte-test">Enter Detailed information</textarea>
    <br />

    <br />
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Publish" class="btn btn-default"/></div>
</form>
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
</div>

