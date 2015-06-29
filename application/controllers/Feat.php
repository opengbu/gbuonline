<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feat extends CI_Controller {
		
	public function vnb()
	{
       		$data['title'] = 'Notice Board &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/virtual_notice_board');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		 
	}
	
        public function events()
	{
        	$data['title'] = 'Events &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/events');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		
	}	
	
	public function exams()
	{
        	$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/exams/py_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	public function opportunities()
	{
        	$data['title'] = 'Opportunities &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/opportunities');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	
}	
