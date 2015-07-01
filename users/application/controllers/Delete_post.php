<?php

class Delete_post extends CI_Controller {

    public function index($table = 'none')
    {
             if ($this->session->userdata('loggedin') != 1) 
            {//Checking for authentication
                redirect('/login');
            }
         //   $scl=$this->input->get('scl');
            $id=$this->input->get('id');
            
            $this->db->query("delete from events where id='$id'");
            redirect('/All_events');
    }
}


