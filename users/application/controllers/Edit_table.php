<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class Edit_table extends CI_Controller {

    function index($tbname = '-1') {
        if ($this->session->userdata('loggedin') != 1) {
            redirect('/login');
        }
        if ($this->session->userdata('type') != 'admin') {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to view this page";
            $this->load->view('common/footer');
            return 0;
        }

        if ($tbname == -1)
            redirect('/all_schools'); //wrong url?
        $this->session->set_userdata('edit_table', $tbname);
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('sc_name', 'Schools name', 'required');
        $this->form_validation->set_rules('sc_full_name', 'Schools full name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Edittable_form');
        } else {
            $sc_name = $this->input->post('sc_name');
            $sc_full_name = $this->input->post('sc_full_name');
            $about_us = $this->input->post('about_us');
            $course_structure = $this->input->post('course_structure');
            $faculty = $this->input->post('faculty');
            $placements = $this->input->post('placements');

            $query2 = $this->db->query("update schools set sc_full_name = '$sc_full_name',about_us = '$about_us',course_structure='$course_structure',faculty='$faculty',placements='$placements' where sc_name='$tbname'");

            $this->session->unset_userdata('edit_table'); //clear session values
            redirect('/All_schools');
        }

        $this->load->view('common/footer');
    }

}
