<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 

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
