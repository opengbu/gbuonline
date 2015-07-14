<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {

        
	public function sobsc()
	{
		$data['title'] = 'SOBSC &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->sobsc();
		//$this->load->view('pages/schools/sobsc',$data1);
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sobsc',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soe()
	{
		$data['title'] = 'SOE &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->soe();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/soe',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sovsas()
	{
		$data['title'] = 'SOVSAS &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->sovsas();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sovsas',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sobt()
	{
		$data['title'] = 'SOBT &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->sobt();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sobt',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function som()
	{
		$data['title'] = 'SOM &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->som();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/som',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soict()
	{
		$data['title'] = 'SOICT &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->soict();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/soict',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function soljg()
	{
		$data['title'] = 'SOLJG &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->soljg();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/soljg',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
        
        public function sohss()
	{
		$data['title'] = 'SOHSS &nbsp;|&nbsp;  GBU Online';
                $this->load->model('schools_db');
                $data1['result']=$this->schools_db->sohss();
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/schools/sohss',$data1);
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
}
