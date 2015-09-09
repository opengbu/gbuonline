<?php

/*
 *  Created on :Sep 8, 2015, 5:30:06 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Permissions_model extends CI_Model {

    var $options = array(
        '' => 'Please Select',
        'student' => 'Student', // 0
        'teacher' => 'Teacher', // 0
        'warden' => 'Warden', // 0
        'cw' => 'Content Writer', //1
        'cm' => 'Content Manager', //2
        'superuser' => 'Super User', //3
        'admin' => 'Administrator', //4  
        'superadmin' => 'Super Admin'//5
    );
    
    var $permissions = array(
        '' => 'Please Select',
        'student' =>  0,
        'teacher' =>  0,
        'warden' => 0,
        'cw' => 1,
        'cm' => 2,
        'superuser' => 3,
        'admin' => 4  ,
        'superadmin' => 5
    );

    public function all_permisiions($type = NULL) {
        return $this->options;
    }

    public function level($type = NULL) {
        if($type == NULL) $type = $this->session->userdata('type');
        
        return  $this->permissions[$type];
    }

}
