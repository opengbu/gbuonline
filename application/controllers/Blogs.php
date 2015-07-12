<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
	public function master_blogs()
	{
        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Blog Space ';
		$data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/blogs/master_blogs');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	
	public function recent_blogs()
	{
      
		$this->load->view('pages/blogs/recent_blogs');
		
	}
	public function write_blogs()
	{
		
	    $this->load->view('pages/blogs/write_blogs');
		
	}
	public function best_blogs()
	{
       
		$this->load->view('pages/blogs/best_blogs');
		
	}
	public function read_blogs()
	{
       
		$data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Blog Space ';
		$data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/blogs/read_blogs');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
		
	}
	
	
}
