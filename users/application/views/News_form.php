<?php
/*
 *  Created on :Jul 20, 2015, 4:30:35 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link type="text/css" rel="stylesheet" href="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= $this->cdn->users() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-8">
    <?php echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']); ?>

    <label>Title</label>
    <input type="text" name="title" size="50" class="form-control" value="<?php echo set_value('title', @$title); ?>">
    <br />
    <label>Slug</label>
    <textarea value="" name="slug" class="slug"><?php echo set_value('slug', @$slug); ?></textarea>
    <br />
    <label>Description</label>
    <textarea  name="text" class="text"><?php echo set_value('text', @$text); ?></textarea>
    <br />

    <br />
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Save" class="btn btn-default"/></div>
</form>
<script>
    //$('.jqte-test').jqte();


    $(".slug").jqte();

    $(".text").jqte();

</script>
</div>

