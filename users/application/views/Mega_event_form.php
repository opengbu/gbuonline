<?php

/* 
 * Created on : Feb 7, 2016, 10:16:15 AM
 * Author     :Varun Garg <varun.10@live.com>
 
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

<div class="col-sm-8" >

    <?php echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']); ?>

    <label>Mega Event Name (example: Abhivyanjana 2016)</label>
    <input type="text" class="form-control" name="name" value="<?php echo set_value('name',@$name); ?>"/>
    <br />
    <label>Duration</label>
    <input type="text" class="form-control" name="duration" value="<?php echo set_value('duration',@$duration); ?>"/>
    <br>
    <label>Default Controller</label>
    <input type="text" class="form-control" name="default_controller" value="<?php echo set_value('default_controller',@$default_controller); ?>"/>
    <br><br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Save" class="btn btn-default"/></div>
</form>
</div>