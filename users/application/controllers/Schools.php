<?php

/*
 *  Created on :Sep 10, 2015, 1:01:01 AM
 *  Author     :Varun Garg <varun.10@live.com>
 
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {

    function index() {
        redirect(base_url() . 'Schools/view_all');
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
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'sc_name' => html_purify($this->input->post('sc_name')),
                'sc_full_name' => html_purify($this->input->post('sc_full_name')),
                'about_us' => html_purify($this->input->post('about_us')),
                'course_structure' => html_purify($this->input->post('course_structure')),
                'faculty' => html_purify($this->input->post('faculty')),
                'placements' => html_purify($this->input->post('placements')),
                'tagline' => html_purify($this->input->post('tagline')),
            );
            if ($this->input->get('school_id') != "") { // update
                $this->db->update('schools', $form_data, " id = '" . $this->input->get('school_id') . "'");
                $this->logger->insert('Updated School - ' . html_purify($this->input->post('sc_name')) . ' (' . $this->input->get('school_id') . ')');
            } else {
                $this->db->insert('schools', $form_data);
                $this->logger->insert('Created School - ' . html_purify($this->input->post('sc_name')));
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

        $title_q = $this->db->query("select sc_name from schools where id = '" . $this->input->get('school_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->sc_name;

        $this->db->query("delete from schools where id = '" . $this->input->get('school_id') . "'");

        $this->logger->insert('Deleted school ' . $title . ' (' . $this->input->get('school_id') . ')', TRUE);

        redirect(base_url() . 'Schools/view_all');
    }

}
