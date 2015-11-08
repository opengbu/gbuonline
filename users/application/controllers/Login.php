<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 *  By calling this php file users can be made to log in on this site
 *  After making the users login, it stores their details in session
 
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

class Login extends CI_Controller {

    public $username;
    public $status;
    public $user_id;
    public $type = 0;

    function index() {
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_details');

        $this->load->library('form_validation');

        if ($this->session->userdata('loggedin') == 1) {//already done
            redirect('/events');
        } else if ($this->form_validation->run() == FALSE) {
            $this->load->view('Login_form');
        } else {

            if (isset($_REQUEST['redirect']) && $_REQUEST['redirect'] != "") {//anyone wants to get back            
                redirect($_REQUEST['redirect']);
            } else {
                redirect('/events'); //otherwise
            }
        }
    }

    function check_details() {
        $username = $this->db->escape($this->input->post('username'));
        $this->username = $username;
        $password = $this->input->post('password');

        $query = $this->db->query("select *  from users where username=$username or email=$username");
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if ($row->active == 0 || $row->active == 2) {
                $this->form_validation->set_message('check_details', 'Your account has not activated yet. Please Check your email');
                return FALSE;
            }
            if ($this->bcrypt->check_password($password, $row->password)) {

                $this->user_id = $row->user_id;
                $this->type = $row->type;
                $this->status = 1;
                $this->session->set_userdata('loggedin', 1);
                $this->session->set_userdata('username', $this->username);
                $this->session->set_userdata('user_id', $this->user_id);
                $this->session->set_userdata('type', $this->type);
                $this->session->set_userdata('full_name', $row->full_name);
                $this->session->set_userdata('roll_number', $row->roll_number);
                $this->session->set_userdata('phone_number', $row->phone_number);
                $this->session->set_userdata('profile_picture', $row->profile_picture);
                $this->session->set_userdata('level', $this->permissions->get_level());

                $this->logger->insert('Logged in.', TRUE, TRUE);
                return TRUE;
            }
        }
        $this->form_validation->set_message('check_details', 'The username or password is incorrect ');
        return FALSE;
    }

}
