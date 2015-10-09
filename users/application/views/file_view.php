<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-5">
    <style>.btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }</style>
        <?php echo form_open_multipart(current_url() . "?" . $_SERVER['QUERY_STRING']); ?>
    <span class="btn btn-default btn-file">
        Browse<input name="userfile" type="file"/>
    </span>
    <br /><br />
    <label>Directory</label><br />
    <?php
    $options['events'] = 'Events';
    $options['notices'] = 'Notices';
    $options['exams'] = 'Exams';
    echo form_dropdown('directory', $options, NULL, 'class="selectpicker"');
    ?>
    <br /><br /><br />
    <?php echo "<input type='submit' name='submit' value='upload' class='btn btn-primary' /> "; ?>
    <?php echo $error; ?>


    <?php echo "</form>" ?>
</div>
