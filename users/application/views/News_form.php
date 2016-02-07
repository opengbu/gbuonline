<?php
/*
 *  Created on :Jul 20, 2015, 4:30:35 PM
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

