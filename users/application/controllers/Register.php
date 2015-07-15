<?php

/*
 *  Created on :Jul 15, 2015, 4:38:16 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Register extends CI_Controller {

    function index() {
        if ($this->session->userdata('loggedin') == 1) {//No registration for registered users
            redirect('/login');
        }
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_details');

        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $type = 'student';
            $password = $this->input->post('password');
            $full_name = $this->input->post('full_name');
            $hash = $this->bcrypt->hash_password($password);
            $roll_number = $this->input->post('roll_number'); //optional
            $phone_number = $this->input->post('phone_number'); //optional
            $confirmation_link = bin2hex(openssl_random_pseudo_bytes(18)); // 36 character link

            $this->db->query("insert into users (full_name,username,email,type,password,roll_number,phone_number,confirmation_link) values ('$full_name','$username','$email','$type','$hash','$roll_number','$phone_number','$confirmation_link')");

            $info = parse_url(base_url());
            $host = $info['host']; //example extract gbuonline.in from http://www.gbuonline.in/sdsds
            $from_email = 'accounts@' . $host; // Ex. accounts@gbuonline.in

            $message = '<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:23.75pt .25in .25in 23.75pt;}
div.WordSection1
	{page:WordSection1;}
-->

</style>

</head>

<body lang=EN-US >

<div class=WordSection1 style="color:black">

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span lang=EN-IN style="mso-ansi-language:EN-IN">Dear ' . $full_name . ',
<br /><br />
Thank you for registering to gbuonline.in .<br /><br />
Please acivate your email address by going to the following link <br />' .
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


            $this->load->view('create_success');
        }
    }

    function check_details() { // Check if user already exists
        $username = $this->input->post('username');
        $q = $this->db->query("select * from users where username = '$username'");
        foreach ($q->result() as $row) {
            $this->form_validation->set_message('check_details', 'The user ' . $username . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }

    function confirm() {
        if (isset($_REQUEST['username']) && isset($_REQUEST['conf']) && $_REQUEST['username'] != "" && $_REQUEST['conf'] != "") {

            $username = $_REQUEST['username'];
            $conf = $_REQUEST['conf'];
            $query = $this->db->query("select * from  users where username = '$username' and confirmation_link = '$conf'");
            if ($query->num_rows() > 0) {
                $this->db->query("update users set active = 1 where username = '$username'");
                $this->load->view('activation_success');
            } else {
                 redirect('login');
            }
        } else
            redirect('login');
    }

}
