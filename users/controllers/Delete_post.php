<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Delete_post extends CI_Controller {

    public function index($table = 'none') {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }
        $id = $this->input->get('id');

        $this->db->query("delete from events where id='$id'");
        redirect('/All_events');
    }

}
