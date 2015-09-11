<?php

/*
 *  Created on :Sep 10, 2015, 8:06:18 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Notices extends CI_Controller {

    function index() {
        redirect(base_url() . 'Notices/view_all');
    }

    function secure_soft() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
            die();
        }
    }

    function secure_hard() {
        $this->secure_soft();
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

            $form_data = array(
                'title' => set_value('title'),
                'date' => Date('Y-m-d'),
                'link' => set_value('link'),
                'user_id' => $this->session->userdata('user_id'),
            );
            if ($this->input->get('notice_id') != "") { // update
                unset($form_data['user_id']);
                unset($form_data['date']);
                $this->db->update('vnb', $form_data, " id = '" . $this->input->get('notice_id') . "'");
            } else {
                $this->db->insert('vnb', $form_data);
            }
            redirect(base_url() . 'Notices/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {
        $this->secure_soft();

        $this->load->view('common/header');
        $this->load->view('View_allnotices');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $this->db->query("delete from vnb where id = '" . $this->input->get('notice_id') . "'");
        redirect(base_url() . 'Notices/view_all');
    }

}
