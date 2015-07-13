<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebooks extends CI_Controller {

	public function ebooks_home()
	{
        $data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' E-Books ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/ebooks');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function soict_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOICT Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/soict_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function sobsc_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOBSC Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/sobsc_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function soe_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOE Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/soe_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function sobt_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOBT Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/sobt_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function som_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOM Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/som_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function soljg_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOLJG Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/soljg_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function sohss_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOHSS Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/sohss_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function sovsas_books()
	{
		$data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOVSAS Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/sovsas_books');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
}
