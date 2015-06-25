<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {

	public function sobsc()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sobsc');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soe()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/soe');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sovsas()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sovsas');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sobt()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sobt');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function som()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/som');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soict()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/soict');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soljg()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/soljg');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sohss()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sohss');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
}