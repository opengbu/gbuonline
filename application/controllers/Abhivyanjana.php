
<!--this controller contains functions that cannot be grouped with any category -->

<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Abhivyanjana extends CI_Controller {
		
	public function index()
	{
       	$data['title'] = 'Abhivyanjana &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Abhivyanjana: Unraveling Meanings ';
		$data['message'] = 'GBU\'s annual cultural and management event.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/fest/abhi');
		//$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		 
	}
	
	public function devep()
	{
       	$data['title'] = 'Abhivyanjana &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = 'Developers';
		$data['message'] = 'The unseen unsung heroes!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/fest/devep');
		//$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		 
	}
	
	public function contact()
	{
       	$data['title'] = 'Abhivyanjana &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = 'Contact';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/fest/sponsors');
		//$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		 
	}
	public function gallery()
	{
       	$data['title'] = 'Abhivyanjana &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = 'Gallery';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/fest/gallery');
		//$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		 
	}
	
	public function events()
	{
       	$data['title'] = 'Abhivyanjana &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = 'University Events';
		$data['message'] = 'Involve, Innovate and Learn ...';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/feat/events');
		//$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		 
	}
	
	
}	
