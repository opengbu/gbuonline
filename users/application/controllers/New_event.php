<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class New_event extends CI_Controller {

    function index() 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('article_name', 'Article_name', 'required');
        $this->form_validation->set_rules('publishing_date', 'publishing_date', 'required');
        

        
        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Newpost_form');
        }
        else 
        {
             $username =   $this->input->post('username');
             $user_id =   $this->input->post('user_id');
             $article_name =   $this->input->post('article_name');
             $article =   $this->input->post('article');
             $publishing_date =   $this->input->post('publishing_date');
             $school_name =   $this->input->post('school_name');
             $short_desc =   $this->input->post('short_desc');
             $image_path =   $this->input->post('image_path');
             $club = $this->input->post('club');
             $type = $this->input->post('type');
             
             $this->db->query("insert into events (image_path,short_desc,user_id,article_name,article,publishing_date,school,club,type) values ('$image_path','$short_desc','$user_id','$article_name','$article','$publishing_date','$school_name','$club','$type')");
             redirect('/All_events');
        }
        
        
        
        $this->load->view('common/footer');
    }
}