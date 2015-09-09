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
        'superadmin' => 'Super Administrator'//5
    );
    var $permissions = array(
        '' => 'Please Select',
        'student' => 0,
        'teacher' => 0,
        'warden' => 0,
        'cw' => 1,
        'cm' => 2,
        'superuser' => 3,
        'admin' => 4,
        'superadmin' => 5
    );
    
    var $colors = array(
        '' => 'Please Select',
        'student' => 'blue',
        'teacher' => 'blue',
        'warden' => 'blue',
        'cw' => 'purple',
        'cm' => 'orange',
        'superuser' => 'green',
        'admin' => 'green',
        'superadmin' => 'red'
    );

    public function all_permisiions($type = NULL) {
        return $this->options;
    }

    public function get_full_type($type = NULL) {
        if ($type == NULL)
            $type = $this->session->userdata('type');

        return $this->options[$type];
    }
    
    
    public function get_color_code($type = NULL) {
        if ($type == NULL)
            $type = $this->session->userdata('type');

        return $this->colors[$type];
    }

    public function get_level($type = NULL) {
        if ($type == NULL)
            $type = $this->session->userdata('type');

        return $this->permissions[$type];
    }

    public function get_type_by_id($id = NULL) {
        if ($id == NULL)
            $id = $this->session->userdata('user_id');
        $res_q = $this->db->query("select type from users where user_id = '$id'");
        if ($res_q->num_rows() == 0)
            return NULL;
        $res = $res_q->row();
        return $res->type;
    }

    public function get_level_by_id($id = NULL) {
        if ($id == NULL)
            $id = $this->session->userdata('user_id');
        $type = $this->get_type_by_id($id);
        if ($type == NULL)
            return NULL;
        return $this->get_level($type);
    }

    public function check_if_greater($u1 = NULL, $u2) {
        if ($u1 == NULL)
            $u1 = $this->session->userdata('user_id');
        if ($u1 == $u2)
            return 1;
        if ($this->get_level_by_id($u1) <= $this->get_level_by_id($u2))
            return -1;
        return 1;
    }

}
