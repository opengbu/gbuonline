<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class New_user extends CI_Controller {


    function index() 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        if($this->session->userdata('type')!='admin')
        {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to view this page";
            $this->load->view('common/footer');
            return 0;
        }
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_details');
        
        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Newuser_form');
        }
        else 
        {
             $username =   $this->input->post('username');
             $email =   $this->input->post('email');
             $type =   $this->input->post('type');
             $password =   $this->input->post('password');
             $full_name =   $this->input->post('full_name');
             $hash = $this->bcrypt->hash_password($password);
             
             $query=$this->db->query("insert into users (full_name,username,email,type,password) values ('$full_name','$username','$email','$type','$hash')");
             redirect('/All_users');
        }        
        $this->load->view('common/footer');
    }
    function check_details() // Check if user already exists
    {
        $username =   $this->input->post('username');
        $q = $this->db->query("select * from users where username = '$username'");
        foreach ($q->result() as $row)
        {
            $this->form_validation->set_message('check_details', 'The user '.$username . ' already exists.');
            return FALSE;
        }
        return TRUE;
    }
}