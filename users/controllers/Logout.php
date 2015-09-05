<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class Logout extends CI_Controller
{
    function index()
    {
        $this->session->sess_destroy();
        redirect('/login');
    }
}
