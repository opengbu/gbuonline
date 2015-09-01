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

    public function alumniList() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/alumniList');
        $this->load->view('pages/common/footer');
    }
    public function name() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/alumniList');
        $this->load->view('pages/common/footer');
    }
    public function cname() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/cname');
        $this->load->view('pages/common/footer');
    }
    public function company() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/company');
        $this->load->view('pages/common/footer');
    }

    public function location() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/alumni/location');
        $this->load->view('pages/common/footer');
    }

}
