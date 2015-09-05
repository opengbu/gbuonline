<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
date_default_timezone_set("Asia/Kolkata");
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-10">
    <?php echo form_open('new_event'); ?>

    <label>Title</label>
    <input type="text" name="article_name" class="form-control" value="<?php echo set_value('article_name'); ?>">
    <br />
    <label>Description</label>
    <textarea value="" name="article" class="jqte-test"  ><?php echo set_value('article'); ?></textarea>
    <br />
    <label>Short description</label>
    <textarea  name="short_desc" class="jqte-test"><?php echo set_value('short_desc'); ?></textarea>
    <br />

    <label>School</label>
    <select name="school_name" class="selectpicker" data-width="100%">
        <?php
        $query = $this->db->query("select *  from schools");
        foreach ($query->result() as $row) {
            echo '<option value="' . $row->sc_name . '">' . $row->sc_full_name . '</option>';
        }
        ?>
    </select>
    <br /><br />

    <label>Featured Image</label>
    <select name="image_path" class="selectpicker" data-width="100%">
        <?php
        $this->load->helper('file');
        $files = get_filenames("../resources/user_uploads");
        foreach ($files as $name) {
            echo '<option value = "resources/user_uploads/' . $name . '">';
            echo 'resources/user_uploads/' . $name;
            echo '</option>';
        }
        ?>
    </select>
    <br /><br />

    <label>Club</label>
    <select name="club" class="selectpicker" data-width="100%">
        <option value="%" >ALL</option>
        <?php
        $query = $this->db->query("select *  from clubs");
        foreach ($query->result() as $row) {
            echo '<option value="' . $row->c_name . '">' . $row->c_full_name . '</option>';
        }
        ?>
    </select>
    <br /><br />

    <label>Type</label>
    <option value="%" >ALL</option>
    <?php
    $options = array("competition", "workshop", "conference", "lecture");
    foreach ($options as $option) {
        echo '<option value="' . $option . '" ';
        echo '>' . ucfirst($option) . '</option>';
    }
    ?>
    <br /><br />

    <label>Event date  </label>
    <input type="text" value="<?= date('Y-m-d'); ?>" name="publishing_date" class="form-control" />

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