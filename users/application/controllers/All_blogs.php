<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class All_blogs extends CI_Controller {

    function index() {
        $this->load->view('common/header');
        $this->load->view('View_all_blogs');
        $this->load->view('common/footer');
    }

}
