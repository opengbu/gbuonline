<?php

/*
 *  Created on :Jul 15, 2015, 4:38:16 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
error_reporting(E_ERROR);
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function index() {
        if ($this->session->userdata('loggedin') == 1) {//No registration for registered users
            redirect('/login');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_details');
        $this->form_validation->set_rules('email', 'email', 'required|callback_check_email');
        $this->form_validation->set_rules('roll_number', 'roll_number', 'callback_check_roll_no');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('registration_form');
        } else {
            $this->load->helper('htmlpurifier');
            
            $password = $this->input->post('password');
            $hash = $this->bcrypt->hash_password($password);
            $confirmation_link = bin2hex(openssl_random_pseudo_bytes(18)); // 36 character lin

            $form_data = array(
                'username' => html_purify($this->input->post('username')),
                'email' => html_purify($this->input->post('email')),
                'type' => 'student',
                'full_name' => html_purify($this->input->post('full_name')),
                'roll_number' => html_purify($this->input->post('roll_number')),
                'password' => $hash,
                'confirmation_link' => $confirmation_link,
            );
            $this->db->insert('users', $form_data);
            $user_id = $this->db->insert_id();
            $this->logger->insert("Registered", TRUE, TRUE, $user_id);
            $this->send_mail($form_data['username'], $form_data['confirmation_link'], $form_data['full_name'], $form_data['email']);
            $data['message'] = 'Your account has been successfully created. <br />'
                    . ' A confirmation link has been sent to your email address to activate your account';
            $this->load->view('Success_message', $data);
        }
    }

    public function check_details() { // Check if user already exists
        $username = $this->input->post('username');
        $q = $this->db->query("select * from users where username = '$username'");
        foreach ($q->result() as $row) {
            $this->form_validation->set_message('check_details', 'The user ' . $username . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

    public function check_roll_no() {
        $roll_no = $this->input->post('roll_number');
        if ($roll_no == NULL || $roll_no == "")
            return TRUE;

        if (preg_match("@^([^/]*/){2}@", $roll_no))
            return TRUE;

        $this->form_validation->set_message('check_roll_no', 'Roll Number ' . $roll_no . ' must be in XX/XXX/XXX format ');
        return FALSE;
    }

    function confirm() {
        if (isset($_REQUEST['username']) && isset($_REQUEST['conf']) && $_REQUEST['username'] != "" && $_REQUEST['conf'] != "") {

            $username = $_REQUEST['username'];
            $conf = $_REQUEST['conf'];
            $query = $this->db->query("select * from  users where username = '$username' and confirmation_link = '$conf'");
            if ($query->num_rows() > 0) {
                $this->db->query("update users set active = 1 where username = '$username'");
                $user_id_r = $query->row();
                $user_id = $user_id_r->user_id;
                $this->logger->insert("Activated via mail", TRUE, TRUE, $user_id);

                $data['message'] = 'Your account has been successfully Activated.';
                $this->load->view('Success_message', $data);
            } else {
                redirect('login');
            }
        } else
            redirect('login');
    }

    function send_mail($username, $confirmation_link, $full_name, $email) {
        $host = str_replace("www.", "", $_SERVER['HTTP_HOST']);
        $from_email = 'accounts@' . $host; // Ex. accounts@gbuonline.in
        $message = '<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
</head>

<body lang=EN-US >

<div class=WordSection1 style="color:black">

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span lang=EN-IN style="mso-ansi-language:EN-IN">Dear ' . $full_name . ',
<br /><br />
Thank you for registering to gbuonline.in .<br /><br />
Please acivate your account by going to the following link <br />' .
                base_url() . 'register/confirm?username=' . $username . '&conf=' . $confirmation_link .
                '<br /> <br />
Thank you!
<br /><br />
With Regards,
<br />
gbuonline.in<br><br />

****************************************************************<br>
This is a system generated mail. Please do not reply to this email.<br>
"****************************************************************</br></b>

</span></span><o:p></o:p></p>
</div>

</body>

</html>
';
        $headers = 'From: Accounts gbuonline.in <' . $from_email . '>' . "\r\n" .
                'Reply-To: ' . $from_email . "\r\n" .
                'X-Mailer: PHP/' . phpversion() . "\r\n" .
                'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n\r\n";

        mail($email, "Welcome To GBU Online", $message, $headers);
    }

    function check_email() { // Check if user already exists
        $email = $this->input->post('email');

        $q = $this->db->query("select * from users where email = '$email'");
        if ($q->num_rows() > 0) {
            $this->form_validation->set_message('check_email', 'The email account ' . $email . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

}
