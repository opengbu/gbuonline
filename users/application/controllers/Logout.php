<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    function index() {
        $this->logger->insert("Logged out", TRUE, TRUE);
        redirect('/Logout/log_out');
    }

    function log_out() {
        $this->session->sess_destroy();
        redirect('/login');
    }

}
