<?php

/*
 *  Created on :Sep 8, 2015, 5:30:06 PM
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

class Permissions_model extends CI_Model {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            $allowed = array(
                'Login',
                'Register',
                'Logout',
                'Upgrade',
                'Reset_password'
            );
            if (!in_array(ucfirst($this->router->fetch_class()), $allowed)) {
                redirect('login' . "?redirect=" . current_url() . $_SERVER['QUERY_STRING']);
                die();
            }
        }
    }

    var $options = array(
        '' => 'Please Select',
        'student' => 'Student', // 0
        'teacher' => 'Teacher', // 0
        'warden' => 'Warden', // 0
        'cw' => 'Content Writer', //1
        'cm' => 'Content Head', //2
        'superuser' => 'Moderator', //3
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
        'admin' => 'red',
        'superadmin' => 'red'
    );

    public function all_permisiions($type = NULL) {
        if ($type == NULL)
            $type = $this->session->userdata('type');
        if ($type == 'superadmin')
            return $this->options;
//else
        $options = $this->options;
        $clevel = $this->get_level($type);
        foreach ($options as $key => $value) {
            if ($clevel <= $this->get_level($key))
                unset($options[$key]);
        }
        if ($clevel == 3) { // superuser cannot interfere with content head
            unset($options['cw']);
            unset($options['cm']);
        }
        return $options;
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
        if ($this->get_level_by_id($u1) == 5) {
            return 1;
        }
        if ($u1 == $u2) //same user
            return 1;
        if ($this->get_level_by_id($u1) <= $this->get_level_by_id($u2))
            return -1;
        return 1;
    }

}
