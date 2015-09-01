<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

    public function index() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/home');
        $this->load->view('pages/common/footer');
    }

    public function events() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/events');
        $this->load->view('pages/common/footer');
    }

    public function gallery() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/gallery');
        $this->load->view('pages/common/footer');
    }

    public function alumni_list() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/list');
        $this->load->view('pages/common/footer');
    }

    public function distinguished() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/distinguished');
        $this->load->view('pages/common/footer');
    }

}
