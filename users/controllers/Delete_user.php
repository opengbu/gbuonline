<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Delete_user extends CI_Controller {

    function index($userid = -1) 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        $current_user_id = $this->session->userdata('user_id');
        if($this->session->userdata('type')!='admin' and $userid!=$current_user_id)
        {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to view this page";
            $this->load->view('common/footer');
            return 0;
        }
        if($userid == -1) redirect ('/all_users');
        $this->db->query("delete from users where user_id = '$userid'");
        redirect ('/all_users');
    }
}