<?php
/*
 *  Created on :Jul 20, 2015, 4:54:24 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
$id = $this->input->get('id');
$query = $this->db->query("select * from news where id = '$id'");
$row = $query->row();
$title = $row->title;
$slug = $row->slug;
$text = $row->text;
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>

<div class="col-sm-8">
    <?php echo form_open('edit_news?id=' . $id); ?>

    <label>Title</label>
    <input type="text" name="title" value="<?=$title?>" size="50" class="form-control">
    <br />
    <label>Slug</label>
    <textarea value="" name="slug" class="jqte-test"  ><?=$slug?></textarea>
    <br />
    <label>Description</label>
    <textarea  name="text" class="jqte-test"><?=$text?></textarea>
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


