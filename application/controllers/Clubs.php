<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {

		public function robotics()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
        $this->load->view('pages/clubs/robotics'); 
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        public function programming()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/programming');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function debating()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/debating');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function art()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/art');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function ss()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/ss');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function dramatics()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/dramatics');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function adventure()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/adventure');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function literary()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/literary');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function photography()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/clubs/photography');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
}