<?php

/*
 *  Created on :Sep 10, 2015, 3:49:00 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Ebooks extends CI_Controller {

    function index() {
        redirect(base_url() . 'Ebooks/view_all');
    }

    function secure_soft() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
            die();
        }
    }

    function secure_hard($level = 4) {
        $this->secure_soft();
        if ($this->permissions->get_level() == 0) {
            $this->load->view('common/header');
            echo "<br><br><br>Insufficient Privelleges. Please Contact Our Content Head";
            $this->load->view('common/footer');
            die();
        }
        return 1;
    }

    function CreateOrUpdate() {
        $this->secure_hard();

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('sc_name', 'School\'s name', 'required');
        $this->form_validation->set_rules('book_name', 'Book\'s name', 'required');
        $this->form_validation->set_rules('dept_name', 'Department\'s name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("ebook_id") != NULL) {

                $query = $this->db->get_where('ebooks', array('id' => $this->input->get('ebook_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Ebook exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Ebook_form', $form_data);
            } else
                $this->load->view('Ebook_form');
        } else {

            $form_data = array(
                'sc_name' => set_value('sc_name'),
                'dept_name' => set_value('dept_name'),
                'book_name' => set_value('book_name'),
                'book_info' => set_value('book_info'),
                'user_id' => $this->session->userdata('user_id'),
            );
            if ($this->input->get('ebook_id') != "") { // update
                unset($form_data['user_id']); //keep original user
                $this->db->update('ebooks', $form_data, " id = '" . $this->input->get('ebook_id') . "'");
            } else {
                $this->db->insert('ebooks', $form_data);
            }
            redirect(base_url() . 'Ebooks/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {
        $this->secure_soft();

        $this->load->view('common/header');
        $this->load->view('View_allebooks');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $this->db->query("delete from ebooks where id = '" . $this->input->get('ebook_id') . "'");
        redirect(base_url() . 'Ebooks/view_all');
    }

}