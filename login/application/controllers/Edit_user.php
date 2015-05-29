<?php


class Edit_user extends CI_Controller {


    function index($userid = '-1') 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        $current_user_id = $this->session->userdata('user_id');
        if($this->session->userdata('type')!='admin' and $userid!=$current_user_id)
        {//more security!
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin or current user to edit this user";
            $this->load->view('common/footer');
            return 0;
        }
        if($userid==-1 ) redirect('/all_users');//wrong url?
        
        $this->session->set_userdata('edit_userid',$userid);
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');

        
        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Edituser_form');
        }
        else 
        {
             $username =   $this->input->post('username');
             $email =   $this->input->post('email');
             $userid =   $this->input->post('user_id');
             $type = $this->input->post('type');
             $password =   $this->input->post('password');
             $hash = $this->bcrypt->hash_password($password);

             $query=$this->db->query("update users set username='$username',email='$email',password='$hash',type='$type' where user_id='$userid'");
             if($username==$this->session->userdata('username')) redirect ('logout');
             //in case user is no longer a admin or changes his name
             redirect('/all_users');
        }
                
        $this->load->view('common/footer');
    }
}