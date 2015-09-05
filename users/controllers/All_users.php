<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class All_users extends CI_Controller
{
    function index()
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        
        $this->load->view('common/header');
        $this->load->view('View_allusers');
        $this->load->view('common/footer');
    }
}