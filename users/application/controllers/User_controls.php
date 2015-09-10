<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class User_controls extends CI_Controller {

    function index() {
        redirect(base_url() . 'user_controls/view_all');
    }

    function secure_soft() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
            die();
        }
    }

    function secure_hard($level = 4) {
        $this->secure_soft();
        if ($this->input->get("user_id") == NULL && $this->permissions->get_level() < 4) {
            //new user
            $this->load->view('common/header');
            echo "<br><br><br>You must be a Administrator to create a user";
            $this->load->view('common/footer');
            die();
        }

        if ($this->input->get("user_id") != $this->session->userdata('user_id') && $this->permissions->get_level() < $level) {
            //not current user
            $this->load->view('common/header');
            echo "<br><br><br>You must be a Administrator to view this page";
            $this->load->view('common/footer');
            die();
        }

        if ($this->permissions->check_if_greater(NULL, $this->input->get("user_id")) != 1) {
            //Cant modify boss
            $this->load->view('common/header');
            echo "<br><br><br>You Cannot modify your boss.";
            $this->load->view('common/footer');
            die();
        }
        return 1;
    }

    function secure_post() {
        if ($this->permissions->get_level() < $this->permissions->get_level($this->input->post('type'))) {
            echo 'Serious attempt to breach security, failed. Your action will be reported<br />';
            echo 'You can help me in improving security, email - varun.10@live.com ';
            die();
        }
    }

    function CreateOrUpdate() {
        $this->secure_hard();
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

            if ($this->input->get('user_id') != "") { // update
                $this->secure_post();
                if (strlen($password) == 0) // no change
                    unset($form_data['password']);
                unset($form_data['confirmation_link']); //not needed
                $this->db->update('users', $form_data, " user_id = '" . $this->input->get('user_id') . "'");

                if ($this->input->get('user_id') == $this->session->userdata('user_id')) {
                    redirect(base_url() . '/logout');
                }
            } else {
                $this->db->insert('users', $form_data);
            }
            redirect(base_url() . 'user_controls/view_all');
        }
    }

    function view_all() {
        $this->secure_soft();

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

    function delete() {
        $this->secure_hard();
        $this->secure_post();
        $this->db->query("delete from users where user_id = '" . $this->input->get('user_id') . "'");
        redirect(base_url() . 'user_controls/view_all');
    }

    function set_type() {
        $this->secure_hard(2);
        $this->secure_post();
        $form_data['type'] = $this->input->post('type');
        $this->db->update('users', $form_data, " user_id = '" . $this->input->get('user_id') . "'");
        redirect(base_url() . 'user_controls/view_all');
    }

}
