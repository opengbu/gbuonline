<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

	public function soict()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/soict_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sobsc()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/sobsc_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soe()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/soe_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sobt()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/sobt_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function som()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/som_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soljg()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/soljg_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sohss()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/sohss_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sovsas()
	{
		$this->load->view('pages/link');
		$this->load->view('pages/header');
		$this->load->view('pages/exams/sovsas_papers');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
}