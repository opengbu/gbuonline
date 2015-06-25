<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feat extends CI_Controller {
		
		public function vnb()
	{
       $this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/virtual_notice_board');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		 
	}
        public function events()
	{
        $this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/events');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		
	}	
	    public function exams()
	{
        $this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/py_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	
}	