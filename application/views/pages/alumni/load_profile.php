<?php
/*
 *  Created on :Sep 02, 2015, 2:20:36 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
$user_id = $this->input->get('user_id');
$basic_info_q = $this->db->query("select * from users,alumni_basic where users.user_id = '$user_id' && alumni_basic.user_id = users.user_id");
$basic_info = $basic_info_q->row();
?>
<style>
    h2{
        padding: 0px;
        margin: 0px;
    }

    h3{
        padding: 0px;
        margin: 0px;
    }
</style>
<div class="container-fluid">
    <ul class="nav nav-list col-sm-12" >
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Name:</label>
                </div>
                <div class="col-sm-4">
                    <?=$basic_info->full_name?>
                </div>
            </div>
        </li>
        
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Date Of Birth:</label>
                </div>
                <div class="col-sm-4">
                    <?=$basic_info->dob?>
                </div>
            </div>
        </li>
        
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Phone Number:</label>
                </div>
                <div class="col-sm-4">
                    <?=$basic_info->phone_number?>
                </div>
            </div>
        </li>
        
        
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Sex:</label>
                </div>
                <div class="col-sm-4">
                    <?=ucfirst($basic_info->gender)?>
                </div>
            </div>
        </li>
        
        
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Address:</label>
                </div>
                <div class="col-sm-4">
                    <?=$basic_info->address?>
                </div>
            </div>
        </li>
        
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Marital Status:</label>
                </div>
                <div class="col-sm-4">
                    <?=  ucfirst($basic_info->marital_status)?>
                </div>
            </div>
        </li>
        
        
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Email</label>
                </div>
                <div class="col-sm-4">
                    <?=$basic_info->email?>
                </div>
            </div>
        </li>    
    </ul>     
    <ul class="nav nav-list col-sm-12" style="padding-top: 30px; padding-bottom: 30px;" >
        <h3>Work Experience</h3>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <label>Email</label>
                </div>
                <div class="col-sm-4">
                    <?=$basic_info->email?>
                </div>
            </div>
        </li>
    </ul>
</div>
