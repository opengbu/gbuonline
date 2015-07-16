<?php

/* 
 *  Created on :Jul 16, 2015, 11:35:12 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class All_clubs extends CI_Controller{
    function  index()
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        
        $this->load->view('common/header');
        $this->load->view('View_allclubs');
        $this->load->view('common/footer');
    }
}