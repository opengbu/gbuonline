<?php

/*
 *  Created on :Sep 10, 2015, 3:49:00 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebooks extends CI_Controller {

    function index() {
        redirect(base_url() . 'Ebooks/view_all');
    }

    function secure_hard() {
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
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'sc_name' => html_purify($this->input->post('sc_name')),
                'dept_name' => html_purify($this->input->post('dept_name')),
                'book_name' => html_purify($this->input->post('book_name')),
                'book_info' => html_purify($this->input->post('book_info')),
                'user_id' => $this->session->userdata('user_id'),
            );
            if ($this->input->get('ebook_id') != "") { // update
                unset($form_data['user_id']); //keep original user
                $this->db->update('ebooks', $form_data, " id = '" . $this->input->get('ebook_id') . "'");
                $this->logger->insert('Updated ebook ' . html_purify($this->input->post('book_name')) . ' (' . $this->input->get('ebook_id') . ')');
            } else {
                $this->db->insert('ebooks', $form_data);
                $this->logger->insert('Created ebook ' . html_purify($this->input->post('book_name')));
            }
            redirect(base_url() . 'Ebooks/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('View_allebooks');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();

        $title_q = $this->db->query("select book_name from ebooks where id = '" . $this->input->get('ebook_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->book_name;

        $this->db->query("delete from ebooks where id = '" . $this->input->get('ebook_id') . "'");

        $this->logger->insert('Deleted ebook ' . $title . ' (' . $this->input->get('ebook_id') . ')', TRUE);

        redirect(base_url() . 'Ebooks/view_all');
    }

}
