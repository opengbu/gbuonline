<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Manage_uploads extends CI_Controller {

    function secure_soft() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
            die();
        }
    }

    function secure_hard() {
        $this->secure_soft();
        if ($this->permissions->get_level() == 0) {
            $this->load->view('common/header');
            echo "<br><br><br>Insufficient Privelleges. Please Contact Our Content Head";
            $this->load->view('common/footer');
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
        unlink("../resources/" . $image);
        redirect('/manage_uploads');
    }

}
