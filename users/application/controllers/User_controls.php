<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controls extends CI_Controller {

    function index() {
        redirect(base_url() . 'user_controls/view_all');
    }

    var $image_path = NULL;

    function secure_hard($level = 4) {

        if ($this->input->get("user_id") == NULL && $this->permissions->get_level() < 4) {
            //new user
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact an Administrator";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }

        if ($this->input->get("user_id") == $this->session->userdata('user_id'))
            return 1; //current user


        if ($this->permissions->get_level() < $level) { //minimnum level to edit/create a user
            //not current user
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact an Administrator";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            $this->load->view('common/footer');
            die();
        }
        //however
        if ($this->input->get("user_id") != NULL && $this->permissions->check_if_greater(NULL, $this->input->get("user_id")) != 1) {
            //Cant modify boss
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. You cannot modify a user with equal or greater access";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        return 1;
    }

    function secure_post() {
        if ($this->permissions->get_level() < $this->permissions->get_level($this->input->post('type'))) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Serious attempt to breach security has been detected. Your action will be reported<br />" .
                    'You can help us in improving security, contact - varun.10@live.com ';
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);

            die();
        }
    }

    function CreateOrUpdate() {
        $this->secure_hard();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
        $this->form_validation->set_rules('email', 'email', 'required|callback_check_email');
        $this->form_validation->set_rules('password', 'Password', 'callback_check_pass');
        $this->form_validation->set_rules('profile_picure', 'profile_picure', 'callback_check_image_and_upload');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('common/header');

            if ($this->input->get("user_id") != NULL) {

                $query = $this->db->get_where('users', array('user_id' => $this->input->get('user_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such user exists";
                    return;
                }
                $form_data = $query->row();
                $this->load->view('User_form', $form_data);
            } else
                $this->load->view('User_form');
            $this->load->view('common/footer');
        } else {
            $this->load->helper('htmlpurifier');
            
            $password = $this->input->post('password');
            $hash = $this->bcrypt->hash_password($password);
            $confirmation_link = bin2hex(openssl_random_pseudo_bytes(18)); // 36 character lin
            $extra_log_message = NULL;

            $form_data = array(
                'username' => html_purify($this->input->post('username')),
                'email' => html_purify($this->input->post('email')),
                'type' => html_purify($this->input->post('type')),
                'password' => html_purify($this->input->post('password')),
                'full_name' => html_purify($this->input->post('full_name')),
                'roll_number' => html_purify($this->input->post('roll_number')),
                'password' => $hash,
                'confirmation_link' => $confirmation_link,
                'profile_picture' => $this->image_path,
                'active' => 1, // auto activate
            );

            if (strlen($this->image_path) == 0)
                unset($form_data['profile_picture']);

            if ($this->input->get('user_id') != "") {

                $query = $this->db->get_where('users', array('user_id' => $this->input->get('user_id')));
                $old_form_data = $query->row();

                $this->secure_post();
                if (strlen($password) == 0) { // no change
                    unset($form_data['password']);
                } else {
                    $extra_log_message = $extra_log_message . ' + updated password ';
                }

                if ($form_data['type'] != $old_form_data->type) {
                    $extra_log_message = $extra_log_message . ' + Changed role to ' .
                            $this->permissions->get_full_type($form_data['type']);
                } else {
                    unset($form_data['type']);
                }

                unset($form_data['confirmation_link']); //not needed

                $this->db->update('users', $form_data, " user_id = '" . $this->input->get('user_id') . "'");
                $this->logger->insert('Updated user - ' . html_purify($this->input->post('username')) . ' (' . $this->input->get('user_id') . ')' . $extra_log_message, TRUE, TRUE);

                if ($this->input->get('user_id') == $this->session->userdata('user_id')) {
                    redirect(base_url() . '/logout');
                }
            } else {
                $this->db->insert('users', $form_data, TRUE, TRUE);
            }
            redirect(base_url() . 'user_controls/view_all');
        }
    }

    function view_all() {

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

    function check_image_and_upload() {

        if (isset($_FILES['profile_picure']['tmp_name']) && strlen($_FILES['profile_picure']['tmp_name']) > 0) {

            if (!file_exists('../user_uploads/profile_images')) {
                mkdir('../user_uploads/profile_images', 0777, true);
            }

            $info = new SplFileInfo($_FILES['profile_picure']['name']);

            $config['upload_path'] = '../user_uploads/profile_images';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $config['file_name'] = $this->input->get('user_id') . '.' . $info->getExtension();

            $this->image_path = 'user_uploads/profile_images/' . $config['file_name']; //to be used by main f'n

            $this->load->library('upload', $config);
            if ($this->upload->do_upload("profile_picure")) {
                return TRUE;
            } else {
                $this->form_validation->set_message('check_image_and_upload', $this->upload->display_errors());
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }

    function delete() {
        $this->secure_hard();
        $this->secure_post();

        $title_q = $this->db->query("select username from users where user_id = '" . $this->input->get('user_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->username;

        $this->db->query("delete from users where user_id = '" . $this->input->get('user_id') . "'");

        $this->logger->insert('deleted user ' . $title . ' (' . $this->input->get('user_id') . ')', TRUE, TRUE);

        redirect(base_url() . 'user_controls/view_all');
    }

    function set_type() {
        $this->secure_hard(2);
        $this->secure_post();
        $form_data['type'] = $this->input->post('type');

        $query = $this->db->get_where('users', array('user_id' => $this->input->get('user_id')));
        $old_form_data = $query->row();
        if ($form_data['type'] != $old_form_data->type) {
            $log_message = ' Changed ' . $old_form_data->username . ' (' . $old_form_data->user_id . ')\'s role to ' .
                    $this->permissions->get_full_type($form_data['type']);
            $this->logger->insert($log_message, TRUE, TRUE);
        }

        $this->db->update('users', $form_data, " user_id = '" . $this->input->get('user_id') . "'");
        redirect(base_url() . 'user_controls/view_all');
    }

}
