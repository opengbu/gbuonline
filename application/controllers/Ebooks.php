<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebooks extends CI_Controller {

	public function ebooks_home()
	{
        $data['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' E-Books ';
		$data['message'] = 'A good book has no ending.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ebooks/ebooks_home');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function view($sc_name)
        {
            
            $data ['title'] = 'E-Books &nbsp;|&nbsp;  GBU Online';
            $data ['heading'] =  $sc_name.' Books ';
            $data['message'] =  'A good book has no ending.';
            $this->load->view('pages/common/link',$data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading',$data);
            
            $data['sc_name'] = $sc_name;
            
            $this->load->view('pages/ebooks/ebooks_info',$data);
            $this->load->view('pages/common/extras');
            $this->load->view('pages/common/footer');
        }
}
