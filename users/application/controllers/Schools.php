<?php

/*
 *  Created on :Sep 10, 2015, 1:01:01 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Schools extends CI_Controller {

    function index() {
        redirect(base_url() . 'Schools/view_all');
    }

    function secure_hard() {
        if ($this->permissions->get_level() == 0) {
            echo $this->load->view('common/header','',TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message,TRUE);
            echo $this->load->view('common/footer','',TRUE);
           die();
        }
        return 1;
    }

    function CreateOrUpdate() {
        $this->secure_hard();

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('sc_name', 'Schools name', 'required');
        $this->form_validation->set_rules('sc_full_name', 'Schools full name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("school_id") != NULL) {

                $query = $this->db->get_where('schools', array('id' => $this->input->get('school_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such school exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('School_form', $form_data);
            } else
                $this->load->view('School_form');
        } else {

            $form_data = array(
                'sc_name' => set_value('sc_name'),
                'sc_full_name' => set_value('sc_full_name'),
                'about_us' => set_value('about_us'),
                'course_structure' => set_value('course_structure'),
                'faculty' => set_value('faculty'),
                'placements' => set_value('placements'),
                'tagline' => set_value('tagline'),
            );
            if ($this->input->get('school_id') != "") { // update
                $this->db->update('schools', $form_data, " id = '" . $this->input->get('school_id') . "'");
            } else {
                $this->db->insert('schools', $form_data);
            }
            redirect(base_url() . 'Schools/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('View_allschools');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $this->db->query("delete from schools where id = '" . $this->input->get('school_id') . "'");
        redirect(base_url() . 'Schools/view_all');
    }

}
