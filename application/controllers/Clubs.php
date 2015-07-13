<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {

	public function robotics()
	{
		$data['title'] = 'Robotics Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Robotics Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
        $this->load->view('pages/clubs/robotics'); 
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
    public function programming()
	{
		$data['title'] = 'Programming Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Programming Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/programming');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function debating()
	{
		$data['title'] = 'Debating Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Debating Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/debating');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function art()
	{
		$data['title'] = 'Art Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Art Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/art');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function ss()
	{
		$data['title'] = 'Social Service Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Social Service Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/ss');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function dramatics()
	{
		$data['title'] = 'Dramatics Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Dramatics Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/dramatics');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function adventure()
	{
		$data['title'] = 'Adventure Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Adventure Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/adventure');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function literary()
	{
		$data['title'] = 'Literary Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Literary Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/literary');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
    public function photography()
	{
		$data['title'] = 'Photography Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Photography Club ';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/photography');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
}
