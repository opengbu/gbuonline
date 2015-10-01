<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_uploads extends CI_Controller {

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

    function index() {

        $this->secure_hard();
        $this->load->helper('file');
        $this->load->view('common/header');
        $this->load->view('View_all_media');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $image = $this->input->get("image");
        unlink("../user_uploads/" . $image);
        $this->logger->insert("Deleted resource user_uploads/$image",TRUE);
        redirect('/manage_uploads');
    }

}
