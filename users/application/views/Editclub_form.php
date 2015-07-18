<?php
/*
 *  Created on :Jul 16, 2015, 12:12:08 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-8" >
    <?php
    $q = $this->db->query("select * from clubs where c_name = '$c_name'");
    foreach ($q->result() as $row) {


        echo form_open('edit_club/index/' . $c_name);
        ?>


        <label>Club Name (example: programming)</label>
        <input type="text" class="form-control" name="c_name" value="<?= $row->c_name ?>" readonly/>
        <br />
        <label>Clubs's Full Name(example: Programming club)</label>
        <input type="text" class="form-control" name="c_full_name" value="<?= $row->c_full_name ?>"/>
        <br>
        <label>Tagline(example: Discover Yourself...)</label>
        <input type="text" class="form-control" name="tagline" value="<?= $row->tagline ?>"/>
        <br>
        <label>About Club</label>
        <textarea name="about_us" class="jqte-test" value=""><?= $row->about_us ?></textarea>
        <br>    
        <label>Faculty In charge</label>
        <textarea name="faculty" class="jqte-test"  value=""><?= $row->faculty ?></textarea>
        <br>
        <label>Student In Charge</label>
        <textarea name="students" class="jqte-test"  value=""><?= $row->students ?></textarea>
        <br>
        <?php
        echo '<label><font color="red">' . validation_errors() . '</font></label>';
        ?>
        <br><br>
        <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
    </form>
    <?php
}
?>
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
