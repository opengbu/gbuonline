<?php

/*
 *  Created on :Sep 10, 2015, 8:53:45 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {

    function index() {
        redirect(base_url() . 'Clubs/view_all');
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
        $this->form_validation->set_rules('c_name', 'Club\'s name', 'required');
        $this->form_validation->set_rules('c_full_name', 'Club\'s full name', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("club_id") != NULL) {

                $query = $this->db->get_where('clubs', array('id' => $this->input->get('club_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Club exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Club_form', $form_data);
            } else
                $this->load->view('Club_form');
        } else {
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'c_name' => html_purify($this->input->post('c_name')),
                'c_full_name' => html_purify($this->input->post('c_full_name')),
                'about_us' => html_purify($this->input->post('about_us')),
                'faculty' => html_purify($this->input->post('faculty')),
                'students' => html_purify($this->input->post('students')),
                'tagline' => html_purify($this->input->post('tagline')),
            );
            if ($this->input->get('club_id') != "") { // update
                $this->db->update('clubs', $form_data, " id = '" . $this->input->get('club_id') . "'");
                $this->logger->insert('Updated club ' . html_purify($this->input->post('c_name')) . ' (' . $this->input->get('club_id') . ')');
            } else {
                $this->db->insert('clubs', $form_data);
                $this->logger->insert('Created club ' . html_purify($this->input->post('c_name')));
            }
            redirect(base_url() . 'Clubs/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('View_allclubs');
        $this->load->view('common/footer');
    }

    function delete() {
        $title_q = $this->db->query("select c_name from clubs where id = '" . $this->input->get('club_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->c_name;

        $this->db->query("delete from clubs where id = '" . $this->input->get('club_id') . "'");

        $this->logger->insert('Deleted club ' . $title . ' (' . $this->input->get('club_id') . ')', TRUE);

        redirect(base_url() . 'Clubs/view_all');
    }

}
