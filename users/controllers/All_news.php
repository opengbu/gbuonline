<?php

/* 
 *  Created on :Jul 20, 2015, 4:05:07 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class All_news extends CI_Controller{
    function  index()
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        
        $this->load->view('common/header');
        $this->load->view('View_allnews');
        $this->load->view('common/footer');
    }
}
