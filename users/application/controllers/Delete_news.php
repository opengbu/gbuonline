<?php

/*
 *  Created on :Jul 20, 2015, 5:01:12 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Delete_news extends CI_Controller {

    public function index($id = 'none') {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
        }
        $this->db->query("delete from news where id='$id'");
        redirect('/All_news');
    }

}
