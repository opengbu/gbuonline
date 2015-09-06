<?php

/*  Note : class="active" in navbar is dynamic
 	home=1
	distinguished=2
	alumnilist=3
	events=4
	gallery=5
	profile=6
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

    public function index() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 1;
		$this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/home');
        $this->load->view('pages/common/footer');
    }
	
	public function distinguished() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 2;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/distinguished');
        $this->load->view('pages/common/footer');
    }
	
	public function alumniList() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/alumniList');
        $this->load->view('pages/common/footer');
    }
    public function name() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/alumniList');
        $this->load->view('pages/common/footer');
    }
    public function cname() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/cname');
        $this->load->view('pages/common/footer');
    }
    public function company() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/company');
        $this->load->view('pages/common/footer');
    }

    public function location() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/location');
        $this->load->view('pages/common/footer');
    }
    
	public function d_name() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/d_name');
        $this->load->view('pages/common/footer');
    }
	 public function d_cname() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/d_cname');
        $this->load->view('pages/common/footer');
    }
    public function d_company() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/d_company');
        $this->load->view('pages/common/footer');
    }

    public function d_location() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Alumni List';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 3;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/d_location');
        $this->load->view('pages/common/footer');
    }
	
    public function events() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 4;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/events');
        $this->load->view('pages/common/footer');
    }

    public function gallery() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = 5;
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/gallery');
        $this->load->view('pages/common/footer');
    }
	
}
