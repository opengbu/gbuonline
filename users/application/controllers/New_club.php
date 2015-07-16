<?php

/*
 *  Created on :Jul 16, 2015, 11:43:49 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class New_club extends CI_Controller {

    function index() {
        if ($this->session->userdata('loggedin') != 1) {
            redirect('/login');
        }
        if ($this->session->userdata('type') != 'admin') {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to view this page";
            $this->load->view('common/footer');
            return 0;
        }
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('c_name', 'Club name', 'required');
        $this->form_validation->set_rules('c_full_name', 'Club full name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Newclub_form');
        } else {
            $c_name = $this->input->post('c_name');
            $c_full_name = $this->input->post('c_full_name');
            $about_us = $this->input->post('about_us');
            $students = $this->input->post('students');
            $faculty = $this->input->post('faculty');

            $this->db->query("insert into clubs (c_name,c_full_name,about_us,faculty,students) values ('$c_name','$c_full_name','$about_us','$faculty','$students')");

            redirect('/All_clubs');
        }

        $this->load->view('common/footer');
    }

}
