<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_upcoming extends CI_Controller {

    function get_title($id) {
        $query = $this->db->query("select article_name from events where id = '$id'");
        if ($query->num_rows() == 0)
            return "Blank";
        $result = $query->row();
        return $result->article_name;
    }

    function index() {

        if ($this->permissions->get_level() < 1) {
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
        $list = NULL;
        $current_q = $this->db->query('select * from upcoming_events');
        foreach ($current_q->result() as $row) {
            $list[$row->id] = $row->event_id;
        }
        for ($i = 1; $i <= 5; $i++) {
            $event_id = $this->input->post("id" . $i);
            if ($event_id != $list[$i]) {
                $this->logger->insert("Changed upcoming event number $i from " . $this->get_title($list[$i]) . ' to ' . $this->get_title($event_id));
                $this->db->query("update upcoming_events set event_id = '$event_id' where id = '$i'");
            }
        }
        redirect('/manage_upcoming');
    }

}
