<?php

/*
 *  Created on :Jul 16, 2015, 12:36:38 PM
 *  Author        :Varun Garg <varun.10@live.com>
 */

class Delete_club extends CI_Controller {

    public function index($club = 'none') {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }
        if ($this->session->userdata('type') != 'admin') {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to acces this page";
            $this->load->view('common/footer');
            return 0;
        }
        if ($club == 'none')
            redirect('/All_clubs');
        $this->db->query("delete from clubs where c_name='$club'");
        $this->db->query("delete from events where club = '$club'");
        redirect('/All_clubs');
    }

}
