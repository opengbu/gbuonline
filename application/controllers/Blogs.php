<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function recent_blogs()
	{
        	$data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        	$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/blogs/recent_blogs');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	public function write_blogs()
	{
		$data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
	    	$this->load->view('pages/blogs/write_blogs');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
	public function best_blogs()
	{
        	$data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        	$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/blogs/best_blogs');
		$this->load->view('pages/extras');
		$this->load->view('pages/footer');
	}
}
