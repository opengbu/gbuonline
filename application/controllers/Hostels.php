<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostels extends CI_Controller {

	public function home()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/home');
		$this->load->view('pages/footer');
	}
	public function info()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Hostel Detail ';
		$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/info');
		$this->load->view('pages/footer');
	}
	
	public function notice()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' Hostel Notice Board ';
		//$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/notice');
		$this->load->view('pages/footer');
	}
	
	public function wardens()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' List of Wardens ';
		//$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/wardens');
		$this->load->view('pages/footer');
	}
	
	public function specific()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/specific');
		$this->load->view('pages/footer');
	}
}
