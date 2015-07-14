<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {

	public function robotics()
	{
		$data['title'] = 'Robotics Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
        	$this->load->view('pages/clubs/robotics'); 
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        public function programming()
	{
		$data['title'] = 'Programming Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/programming');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function debating()
	{
		$data['title'] = 'Debating Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/debating');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function art()
	{
		$data['title'] = 'Art Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/art');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function ss()
	{
		$data['title'] = 'Social Service Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/ss');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function dramatics()
	{
		$data['title'] = 'Dramatics Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/dramatics');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function adventure()
	{
		$data['title'] = 'Adventure Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/adventure');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function literary()
	{
		$data['title'] = 'Literary Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/literary');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function photography()
	{
		$data['title'] = 'Photography Club &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/photography');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
}
