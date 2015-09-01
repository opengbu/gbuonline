<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function home() {
        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Blog Space ';
        $data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/');
        $this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
    }
}