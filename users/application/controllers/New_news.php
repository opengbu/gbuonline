<?php

/*
 *  Created on :Jul 20, 2015, 4:23:20 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class New_news extends CI_Controller {

    function index() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slug', 'slug', 'required');
        $this->form_validation->set_rules('text', 'Description', 'required');

        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Newnews_form');
        } else {
            $user_id = $this->session->userdata('user_id');
            $title = $this->input->post('title');
            $slug = $this->input->post('slug');
            $text = $this->input->post('text');

            $this->db->query("insert into news (user_id,title,slug,text) values ('$user_id','$title','$slug','$text')");
            redirect('/All_news');
        }

        $this->load->view('common/footer');
    }

}
