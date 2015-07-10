<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
date_default_timezone_set("Asia/Kolkata");
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-10">
    <?php echo form_open('new_event'); ?>

    <input type="hidden" class="form-control" name="username" value="<?= $this->session->userdata('username') ?>" size="50"  readonly/>

    <input type="hidden" class="form-control" name="user_id" value="<?= $this->session->userdata('user_id') ?>" size="50" readonly=""/>

    <label>Title</label>
    <input type="text" name="article_name" value="" size="50" class="form-control">
    <br />
    <label>Description</label>
    <textarea value="" name="article" class="jqte-test"  >Enter detailed event description</textarea>
    <br />
    <label>Short description</label>
    <textarea  name="short_desc" class="jqte-test"> Example<br /><b>Date:</b> 28 - 01 - 2015 <br><b>Time:</b> 18:30 - 20:00<br/><b>Venue:</b> SOICT</textarea>
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

    <label>Publishing date  </label>
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