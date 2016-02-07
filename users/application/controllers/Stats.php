/*
 *  created by Rajat Saxena and Shobhit Sharma
*/

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends CI_Controller {

    function index() {
        if ($this->session->userdata('level') < '2') {
            redirect('/login');
        }

        $this->load->view('common/header');
        $this->load->view('view_stats');
        $this->load->view('common/footer');
    }

}
?>