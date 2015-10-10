<?php

/*
 *  Created on :Sep 10, 2015, 8:06:18 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Notices extends CI_Controller {

    function index() {
        redirect(base_url() . 'Notices/view_all');
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
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('link', 'Upload Path', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("notice_id") != NULL) {

                $query = $this->db->get_where('vnb', array('id' => $this->input->get('notice_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Notice exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Notice_form', $form_data);
            } else
                $this->load->view('Notice_form');
        } else {
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'title' => html_purify($this->input->post('title')),
                'date' => Date('Y-m-d'),
                'link' => html_purify($this->input->post('link')),
                'user_id' => $this->session->userdata('user_id'),
            );
            if ($this->input->get('notice_id') != "") { // update
                unset($form_data['user_id']);
                unset($form_data['date']);
                $this->db->update('vnb', $form_data, " id = '" . $this->input->get('notice_id') . "'");
                $this->logger->insert('Updated notice - ' . html_purify($this->input->post('title')) . ' (' . $this->input->get('notice_id') . ')');
            } else {
                $this->db->insert('vnb', $form_data);
                $this->logger->insert('Created notice - ' . html_purify($this->input->post('title')));
            }
            redirect(base_url() . 'Notices/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('View_allnotices');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();

        $title_q = $this->db->query("select title from vnb where id = '" . $this->input->get('notice_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->title;

        $this->db->query("delete from vnb where id = '" . $this->input->get('notice_id') . "'");

        $this->logger->insert('Deleted notice ' . $title . ' (' . $this->input->get('notice_id') . ')', TRUE);

        redirect(base_url() . 'Notices/view_all');
    }

}
