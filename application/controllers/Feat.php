<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feat extends CI_Controller {
		
	public function vnb()
	{
       	$data['title'] = 'Notice Board &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Virtual Notice Board ';
		$data['message'] = 'Get Notified About Everything...';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/virtual_notice_board');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		 
	}
	
        public function events()
	{
        $data['title'] = 'Events &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' University Events ';
		$data['message'] = 'Involve, Innovate and Learn ...';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/events');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		
	}	
	
	public function exams()
	{
        $data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Exam-Section ';
		$data['message'] = 'Previous Year Papers';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/exams/py_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	public function opportunities()
	{
        $data['title'] = 'Opportunities &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Opportunities ';
		$data['message'] = 'Help us to improve and maintain GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/opportunities');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	public function ebooks()
	{
        $data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' E-Books ';
		$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/ebooks/ebooks.php');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	
}	
