<?php
/*
 *  Created on :Sep 10, 2015, 8:15:29 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

function add_prefix(&$item1, $key, $prefix) {
    $item1 = $prefix . $item1;
}
?>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    ?>

    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo set_value('title', @$title); ?>"/>
    <br>

    <label>Select File</label><br />
    <?php
    $this->load->helper('file');
    $files = get_filenames("../user_uploads/notices");
    array_walk($files, "add_prefix", 'user_uploads/notices/');
    $files = array_combine($files, $files);
    echo form_dropdown('link', $files, set_value('link', @$link), 'class="selectpicker" data-width="60%"');
    ?>
    <br /><br />

    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>
