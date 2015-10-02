<?php

/*
 *  Created on :Oct 1, 2015, 4:21:59 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
error_reporting(E_ERROR);
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller {

    var $email = NULL;
    var $active = NULL;
    var $username = NULL;
    var $full_name = NULL;
    var $user_id = NULL;

    function index() {
        $this->link_generator();
    }

    function link_generator() {
        if ($this->session->userdata('loggedin') == 1) {//No registration for registered users
            redirect('/login');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username_or_email', 'Username or email', 'required|callback_check_details');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Reset_password_details');
        } else {
            $confirmation_link = bin2hex(openssl_random_pseudo_bytes(18)); // 36 character lin

            if ($this->active == 0)
                $this->active = 2;
            if ($this->active == 1)
                $this->active = 3;

            $form_data = array(
                'confirmation_link' => $confirmation_link,
                'active' => $this->active,
            );

            $this->db->update('users', $form_data, " username = '" . $this->username . "'");
            $this->send_mail($this->username, $confirmation_link, $this->full_name, $this->email);
            $this->logger->insert("Password Reset link sent for $this->username to $this->email", TRUE, TRUE, $this->user_id);
            $data['message'] = "Password reset link has been  sent to your email account ($this->email).";
            $this->load->view('Success_message', $data);
        }
    }

    public function check_details() { // Check if user already exists
        $username = $this->input->post('username_or_email');
        $q = $this->db->query("select * from users where username = '$username' or email = '$username' ");

        if ($q->num_rows() == 0) {
            $this->form_validation->set_message('check_details', 'The user or email ' . $username . ' does not exist.');
            return FALSE;
        }
        $result = $q->row();
        $this->email = $result->email;
        $this->active = $result->active;
        $this->full_name = $result->full_name;
        $this->username = $result->username;
        $this->user_id = $result->user_id;
        return TRUE;
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
You have requested for a password chage in gbuonline.in<br /><br />
Your One time Password reset link is <br />' .
                base_url() . 'Reset_password/confirm?username=' . $username . '&conf=' . $confirmation_link .
                '<br /> <br />
Thank you!
<br /><br />
With Regards,
<br />
Gbu Online <br><br />

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

        mail($email, "GBU Online | Password Reset", $message, $headers);
    }

    function confirm() {
        if ($this->session->userdata('loggedin') == 1) {
            redirect('/login');
        }
        if (isset($_REQUEST['username']) && isset($_REQUEST['conf']) && $_REQUEST['username'] != "" && $_REQUEST['conf'] != "") {

            $username = $_REQUEST['username'];
            $conf = $_REQUEST['conf'];
            $query = $this->db->query("select * from  users where username = '$username' and confirmation_link = '$conf'");
            if ($query->num_rows() == 0)
                redirect('login');
            else {
                $result = $query->row();

                if ($result->active < 2) {
                    $data['errors'] = "It looks like you have already used this link once, please go to reovery again and get a new link!";
                    $this->load->view('Error_message', $data);
                    return;
                }

                $this->session->set_userdata('loggedin', 2);
                $this->session->set_userdata('username', $result->username);
                $this->session->set_userdata('user_id', $result->user_id);
                $this->logger->insert("Activated Password Reset link", TRUE, TRUE);
                redirect('Reset_password/reset');
            }
        } else {
            redirect('login');
        }
    }

    function reset() {
        if ($this->session->userdata('loggedin') != 2) {
            redirect('/login');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Reset_password');
        } else {
            $password = $this->input->post('password');
            $hash = $this->bcrypt->hash_password($password);


            $form_data = array(
                'password' => $hash,
                'active' => 1, // now we know that email is confirmed
            );

            $this->db->update('users', $form_data, " username = '" . $this->session->username . "'");
            $this->logger->insert("Successfully recovered Account", TRUE, TRUE);

            $data['message'] = 'Your password is successfully changed.';
            $this->load->view('Success_message', $data);
        }
    }

}
