<?php

/* 
 *  Created on :Sep 10, 2015, 7:18:31 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Exams extends CI_Controller {

    function index() {
        redirect(base_url() . 'Exams/view_all');
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
        $this->form_validation->set_rules('year', 'Year (Ex:2015)', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('image_path', 'Document Location', 'required');
        $this->form_validation->set_rules('paper_name', 'Exam\'s name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("exam_id") != NULL) {

                $query = $this->db->get_where('exams', array('id' => $this->input->get('exam_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Ebook exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Exam_form', $form_data);
            } else
                $this->load->view('Exam_form');
        } else {

            $form_data = array(
                'sc_name' => set_value('sc_name'),
                'year' => set_value('year'),
                'semester' => set_value('semester'),
                'image_path' => set_value('image_path'),
                'paper_name' => set_value('paper_name'),
            );
            if ($this->input->get('exam_id') != "") { // update
                $this->db->update('exams', $form_data, " id = '" . $this->input->get('exam_id') . "'");
            } else {
                $this->db->insert('exams', $form_data);
            }
            redirect(base_url() . 'Exams/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {
        $this->secure_soft();

        $this->load->view('common/header');
        $this->load->view('View_allexams');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $this->db->query("delete from exams where id = '" . $this->input->get('exam_id') . "'");
        redirect(base_url() . 'Exams/view_all');
    }

}
