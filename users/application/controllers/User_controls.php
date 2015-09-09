<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class User_controls extends CI_Controller {

    function index() {
        redirect(base_url() . 'user_controls/view_all');
    }

    function CreateOrUpdate() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }


        if ($this->input->get("user_id") != NULL && $this->permissions->level() < 4) {
            //new user
            $this->load->view('common/header');
            echo "<br><br><br>You must be a Administrator to view this page";
            $this->load->view('common/footer');
            return 0;
        }

        if ($this->input->get("user_id") != $this->session->userdata('user_id') && $this->permissions->level() < 4) {
            //current user
            $this->load->view('common/header');
            echo "<br><br><br>You must be a Administrator to view this page";
            $this->load->view('common/footer');
            return 0;
        }

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
        $this->form_validation->set_rules('email', 'email', 'required|callback_check_email');
        $this->form_validation->set_rules('password', 'Password', 'callback_check_pass');

        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('common/header');

            if ($this->input->get("user_id") != NULL) {

                $query = $this->db->get_where('users', array('user_id' => $this->input->get('user_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such user exists";
                    echo $this->input->get('user_id');
                    return;
                }
                $form_data = $query->row();
                $this->load->view('user_form', $form_data);
            } else
                $this->load->view('user_form');
            $this->load->view('common/footer');
        } else {
            $password = $this->input->post('password');
            $hash = $this->bcrypt->hash_password($password);
            $confirmation_link = bin2hex(openssl_random_pseudo_bytes(18)); // 36 character lin

            $form_data = array(
                'username' => set_value('username'),
                'email' => set_value('email'),
                'type' => set_value('type'),
                'password' => set_value('password'),
                'full_name' => set_value('full_name'),
                'roll_number' => set_value('roll_number'),
                'password' => $hash,
                'confirmation_link' => $confirmation_link,
            );

            if ($this->input->get('user_id') != "") // update
                $this->db->update('users', $form_data, " user_id = '" . $this->input->get('user_id') . "'");
            else
                $this->db->insert('users', $form_data);

            redirect(base_url() . 'user_controls/view_all');
        }
    }

    function view_all() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }

        $this->load->view('common/header');
        $this->load->view('View_allusers');
        $this->load->view('common/footer');
    }

    function check_username() { // Check if user already exists
        $username = $this->input->post('username');
        $user_id = $this->input->get('user_id');
        $q = $this->db->query("select * from users where username = '$username' and user_id != '$user_id'");
        if ($q->num_rows() > 0) {
            $this->form_validation->set_message('check_username', 'The user ' . $username . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

    function check_email() { // Check if email already exists
        $email = $this->input->post('email');
        $user_id = $this->input->get('user_id');

        $q = $this->db->query("select * from users where email = '$email' and user_id != '$user_id'");
        if ($q->num_rows() > 0) {
            $this->form_validation->set_message('check_email', 'The email account ' . $email . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

    function check_pass() { //If password is not empty it should match with repeated password in form.
        $password = $this->input->post('password');
        $passconf = $this->input->post('passconf');

        if ($this->input->get('user_id') == NULL) { // new user
            if (strlen($password) < 6) {
                $this->form_validation->set_message('check_pass', 'Password must be of atleast 6 letters ');
                return FALSE;
            }
        }

        if ($password == $passconf)
            return TRUE;
        $this->form_validation->set_message('check_pass', 'Passwords do not match ');
        return FALSE;
    }

}
