<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostels extends CI_Controller {

	public function home()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/home');
		$this->load->view('pages/footer');
	}
	public function content()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/content');
		$this->load->view('pages/footer');
	}
	
	public function notice()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/notice');
		$this->load->view('pages/footer');
	}
	
	public function wardens()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/wardens');
		$this->load->view('pages/footer');
	}
	
	public function specific()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/specific');
		$this->load->view('pages/footer');
	}
}
