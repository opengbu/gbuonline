<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {

	public function sobsc()
	{
		$data['title'] = 'SOBSC &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Buddhist Studies and Civilization';
		$data['message'] = 'Where Buddhist Ethics are applied in real life!!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/sobsc');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function soe()
	{
		$data['title'] = 'SOE &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Engineering';
		$data['message'] = 'Where necessity is the mother of invention!!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/soe');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sovsas()
	{
		$data['title'] = 'SOVSAS &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Vocational Studies and Applied Sciences';
		$data['message'] = 'Where research meets nature!!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/sovsas');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sobt()
	{
		$data['title'] = 'SOBT &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Biotechnology ';
		$data['message'] = 'Where Hybrids are produced!!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/sobt');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function som()
	{
		$data['title'] = 'SOM &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Management';
		$data['message'] = 'Where ideas are moulded into businesses!!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/som');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function soict()
	{
		$data['title'] = 'SOICT &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Information & Communication Technology';
		$data['message'] = 'Where Technology meets Innovation !!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/soict');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function soljg()
	{
		$data['title'] = 'SOLJG &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Law, Justice and Governance';
		$data['message'] = 'Where Constitution is redefined !!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/soljg');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sohss()
	{
		$data['title'] = 'SOHSS &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' School of Humanities and Social Sciences';
		$data['message'] = 'Where HomoSapiens are transformed to Humane Beings!!!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/schools/sohss');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
}
