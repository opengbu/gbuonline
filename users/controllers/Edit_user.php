<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Edit_user extends CI_Controller {

    function index($userid = '-1') {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }
        $current_user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('type') != 'admin' and $userid != $current_user_id) {//more security!
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin or current user to edit this user";
            $this->load->view('common/footer');
            return 0;
        }
        if ($userid == -1)
            redirect('/all_users'); //wrong url?

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email');
        $this->form_validation->set_rules('password', 'Password', 'callback_check_pass');

        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $params['post'] = $_POST;
            $params['failed_validation'] = 'true';
            $params['userid'] = $userid;
            $this->load->view('Edituser_form', $params);
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $userid = $this->input->post('user_id');
            $type = $this->input->post('type');
            $password = $this->input->post('password');
            $full_name = $this->input->post('full_name');
            $roll_number = $this->input->post('roll_number');
            $phone_number = $this->input->post('phone_number');

            if ($password !== '') { //user is chaning his password
                $hash = $this->bcrypt->hash_password($password);
                $this->db->query("update users set roll_number='$roll_number',phone_number='$phone_number', full_name='$full_name',  username='$username',email='$email',password='$hash',type='$type' where user_id='$userid'");
            } else { //in case user does not wish to chage password
                $this->db->query("update users set roll_number='$roll_number',phone_number='$phone_number', full_name='$full_name',  username='$username',email='$email',type='$type' where user_id='$userid'");
            }

            if ($username == $this->session->userdata('username'))
                redirect('logout'); //in case user is no longer a admin or changes his name

            redirect('/all_users');
        }

        $this->load->view('common/footer');
    }

    function check_pass() { //If password is not empty it should match with repeated password in form.
        $password = $this->input->post('password');
        $passconf = $this->input->post('passconf');
        if ($password == $passconf)
            return TRUE;
        $this->form_validation->set_message('check_pass', 'Passwords do not match ');
        return FALSE;
    }

    function check_username() { // Check if user already exists
        $username = $this->input->post('username');
        $userid = $this->input->post('user_id');

        $q = $this->db->query("select * from users where username = '$username' and user_id != '$userid' ");
        if ($q->num_rows() > 0) {
            $this->form_validation->set_message('check_username', 'The user ' . $username . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

    function check_email() { // Check if user already exists
        $email = $this->input->post('email');
        $userid = $this->input->post('user_id');

        $q = $this->db->query("select * from users where email = '$email' and user_id != '$userid'");
        if ($q->num_rows() > 0) {
            $this->form_validation->set_message('check_email', 'The email account ' . $email . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

}
