<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Manage_upcoming extends CI_Controller {

    function index() {

        if ($this->permissions->get_level() < 2) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);

            return 0;
        }


        $this->load->view('common/header');
        $this->load->view('upcomingevents_form');
        $this->load->view('common/footer');
    }

    function save() {
        if ($this->session->userdata('loggedin') != 1) {
            redirect('/login');
        }
        if ($this->permissions->get_level() < 2) {
            $this->load->view('common/header');
            echo "<br><br><br>You must contact Content Head to manage upcoming events";
            $this->load->view('common/footer');
            return 0;
        }
        for ($i = 1; $i < 5; $i++) {
            $event_id = $this->input->post("id" . $i);
            $this->db->query("update upcoming_events set event_id = '$event_id' where id = '$i'");
        }
        redirect('/manage_upcoming');
    }

}
