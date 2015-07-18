<?php

/*
 *  Created on :Jul 16, 2015, 12:04:32 PM
 *  Author        :Varun Garg <varun.10@live.com>
 */

class Edit_club extends CI_Controller {

    function index($cname = '-1') {
        if ($this->session->userdata('loggedin') != 1) {
            redirect('/login');
        }
        if ($this->session->userdata('type') != 'admin') {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to view this page";
            $this->load->view('common/footer');
            return 0;
        }

        if ($cname == -1)
            redirect('/all_clubs'); //wrong url?
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('c_name', 'Club\'s name', 'required');
        $this->form_validation->set_rules('c_full_name', 'Club\'s full name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $data['c_name'] = $cname;
            $this->load->view('Editclub_form',$data);
        } else {
            $c_name = $this->input->post('c_name');
            $c_full_name = $this->input->post('c_full_name');
            $about_us = $this->input->post('about_us');
            $faculty = $this->input->post('faculty');
            $students = $this->input->post('students');
            $tagline = $this->input->post('tagline');

            $this->db->query("update clubs set tagline = '$tagline', c_full_name = '$c_full_name',about_us = '$about_us',faculty='$faculty',students='$students' where c_name='$cname'");

            redirect('/All_clubs');
        }

        $this->load->view('common/footer');
    }

}
