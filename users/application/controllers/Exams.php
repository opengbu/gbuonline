<?php

/*
 *  Created on :Sep 10, 2015, 7:18:31 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

    function index() {
        redirect(base_url() . 'Exams/view_all');
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
        $this->form_validation->set_rules('year', 'Year (Ex:2015)', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('image_path', 'Document Location', 'required');
        $this->form_validation->set_rules('paper_name', 'Paper\'s name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("exam_id") != NULL) {

                $query = $this->db->get_where('exams', array('id' => $this->input->get('exam_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Exam exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Exam_form', $form_data);
            } else
                $this->load->view('Exam_form');
        } else {
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'sc_name' => html_purify($this->input->post('sc_name')),
                'year' => html_purify($this->input->post('year')),
                'semester' => html_purify($this->input->post('semester')),
                'image_path' => html_purify($this->input->post('image_path')),
                'paper_name' => html_purify($this->input->post('paper_name')),
            );
            if ($this->input->get('exam_id') != "") { // update
                $this->db->update('exams', $form_data, " id = '" . $this->input->get('exam_id') . "'");
                $this->logger->insert('Updated exam paper - ' . html_purify($this->input->post('paper_name')) . ' (' . $this->input->get('exam_id') . ')');
            } else {
                $this->db->insert('exams', $form_data);
                $this->logger->insert('Created exam paper - ' . html_purify($this->input->post('paper_name')));
            }
            redirect(base_url() . 'Exams/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('View_allexams');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();

        $title_q = $this->db->query("select paper_name from exams where id = '" . $this->input->get('exam_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->paper_name;

        $this->db->query("delete from exams where id = '" . $this->input->get('exam_id') . "'");

        $this->logger->insert('Deleted exam ' . $title . ' (' . $this->input->get('exam_id') . ')', TRUE);

        redirect(base_url() . 'Exams/view_all');
    }

}
