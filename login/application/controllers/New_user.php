<?php


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
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');

        
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

             $query=$this->db->query("insert into users (username,email,type,password) values ('$username','$email','$type','$password')");
             redirect('/All_users');
        }
        
        
        
        $this->load->view('common/footer');
    }
}