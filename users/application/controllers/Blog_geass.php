<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_geass extends CI_Controller {

    function index($bid = '-1') {

        if ($this->permissions->get_level() != 2 && $this->permissions->get_level() < 4) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }

        if ($bid == -1)
            redirect('/all_blogs'); //wrong url?
        $this->session->set_userdata('bid', $bid);

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('status', 'status', 'required');

        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Blog_form');
        } else {
            $status = $this->input->post('status');
            $this->db->query("update blog set status = '$status' where id = '$bid'");

            $title_q = $this->db->query("select title from blog where id = '$bid' ");
            $title_r = $title_q->row();
            $title = $title_r->title;

            $message = "NULL";
            if ($status == 0)
                $message = 'Pending';
            else if ($status == 1)
                $message = 'Approved';
            else if ($status == 2)
                $message = 'Rejected';
            $this->logger->insert("Marked $title ($bid) as $message");

            $this->session->unset_userdata('bid'); //free space
            redirect("/all_blogs");
        }
    }

}
