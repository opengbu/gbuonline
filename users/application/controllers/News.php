<?php

/*
 *  Created on :Sep 10, 2015, 9:19:25 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class News extends CI_Controller {

    function index() {
        redirect(base_url() . 'News/view_all');
    }

    function secure_soft() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
            die();
        }
    }

    function secure_hard() {
        $this->secure_soft();
        if ($this->permissions->get_level() == 0) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        return 1;
    }

    function CreateOrUpdate() {
        $this->secure_hard();

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slug', 'slug', 'required');
        $this->form_validation->set_rules('text', 'Description', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("news_id") != NULL) {

                $query = $this->db->get_where('news', array('id' => $this->input->get('news_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such News exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('News_form', $form_data);
            } else
                $this->load->view('News_form');
        } else {

            $form_data = array(
                'title' => set_value('title'),
                'slug' => set_value('slug'),
                'text' => set_value('text'),
            );
            if ($this->input->get('news_id') != "") { // update
                $this->db->update('news', $form_data, " id = '" . $this->input->get('news_id') . "'");
            } else {
                $this->db->insert('news', $form_data);
            }
            redirect(base_url() . 'News/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {
        $this->secure_soft();

        $this->load->view('common/header');
        $this->load->view('View_allnews');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $this->db->query("delete from news where id = '" . $this->input->get('news_id') . "'");
        redirect(base_url() . 'News/view_all');
    }

}
