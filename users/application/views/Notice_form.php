<?php
/*
 *  Created on :Sep 10, 2015, 8:15:29 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);

    ?>

    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo set_value('title', @$title); ?>"/>
    <br>

    <label>Select File</label>
    <select name="link" class="selectpicker" data-width="100%">
        <?php
        $this->load->helper('file');
        $files = get_filenames("../resources/notices");
        foreach ($files as $name) {
            echo '<option value = "resources/notices/' . $name . '">';
            echo 'resources/notices/' . $name;
            echo '</option>';
        }
        ?>
    </select>
    <br /><br />

    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>
