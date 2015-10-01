<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');


$id = $this->session->userdata('bid');
echo form_open('Blog_geass/index/' . $id);
$q = $this->db->query("select blog.*,full_name from blog,users where id = '$id' and blog.user_id = users.user_id");
?>
<div class="col-lg-8">

    <ul class="nav nav-list col-sm-12">
        <div class="row ">
            <div class="col-sm-12 ">

                <?php
                foreach ($q->result() as $row) {
                    ?>
                    <ul class="nav nav-list well">
                        <li class="list-group-item">

                            <div class="row ">
                                <div class="col-sm-4">
                                    <label>Name</label>
                                    <?= $row->full_name ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row ">
                                <div class="col-sm-10">
                                    <label>Title</label>
                                    <?= $row->title ?>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row ">
                                <div class="col-sm-10">
                                    <label>Status:</label>
                                    <?php
                                    if ($row->status == 0)
                                        echo "<font color='red'>pending</font>";
                                    else if ($row->status == 2)
                                        echo "<font color='gray'>rejected</font>";
                                    else if ($row->status == 3)
                                        echo "<font color='blue'>Pending (Edited)</font>";
                                    else
                                        echo "<font color='green'>accepted</font>";
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">   
                            <div class="row ">
                                <div class="col-sm-12">
                                    <label>Description<br></label>
                                    <?= $row->description ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php
                }
                ?>
                <label>Actions</label>
                <select name="status" value="<?= $row->status ?>" class="selectpicker" data-width="100%">
                    <option value="<?= $row->status ?>">Pick:</option>
                    <option value="0">mark as pending</option>
                    <option value="1">Approve</option>
                    <option value="2">Reject</option>
                </select>
                <br /><br />
                <div><input type="submit" value="Apply" class="btn btn-default"/></div>
                </form>
            </div>