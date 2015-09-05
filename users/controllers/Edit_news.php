<?php

/*
 *  Created on :Jul 20, 2015, 4:48:55 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Edit_news extends CI_Controller {

    function index() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }
        $id = $this->input->get('id');

        if ($id == null)
            redirect('all_posts'); //wrong url?

        $current_user_id = $this->session->userdata('user_id');
        $query = $this->db->query("select * from news where id = '$id'");

        foreach ($query->result() as $row) {//to determine publishing_users id
            $a_user_id = $row->user_id;
        }

        if ($this->session->userdata('type') != 'admin' and $a_user_id != $current_user_id) {//more security!
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin or publishing user to edit this news";
            $this->load->view('common/footer');
            return 0;
        }

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slug', 'slug', 'required');
        $this->form_validation->set_rules('text', 'Description', 'required');

        $this->load->view('common/header');
        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Editnews_form');
        } else {
            $id = $this->input->get('id');
            $title = $this->input->post('title');
            $slug = $this->input->post('slug');
            $text = $this->input->post('text');

            $this->db->query("update news set title = '$title', slug = '$slug', text = '$text' where id='$id'");
            redirect('/All_news');
        }
        $this->load->view('common/footer');
    }

}
