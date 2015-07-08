<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostels extends CI_Controller {

	public function home()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/home');
		$this->load->view('pages/footer');
	}
	public function info()
	{
            /*
             * Note by Varun...
             * Looks like this code is used to go to a login page and then to specific
             * I will redirect it directly to specific where it will send to /user/login if not logged in
             * this is not to get user logged in (which is now added in specific)
             * but also to user direcly going to specific by knowing controller name
             */
            redirect ('hostels/specific');
             /* 
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Hostel Detail ';
		$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/info');
		$this->load->view('pages/footer');
             */
             
	}
	
	public function notice()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' Hostel Notice Board ';
		//$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/notice');
		$this->load->view('pages/footer');
	}
	
	public function wardens()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' List of Wardens ';
		//$data['message'] = '';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/wardens');
		$this->load->view('pages/footer');
	}
	
	public function specific()
	{
            
                /*
                 * Note by Varun... 
                 * I am redirecting it to login page if not logged in
                 * It will come back to this page on authentication
                 */
                $this->load->library('session');
                if($this->session->userdata('loggedin') != 1) //student/user/admin logged in
                    redirect ('users?redirect='.current_url());
            
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/link',$data);
		$this->load->view('pages/header');
		$this->load->view('pages/hostels/specific');
		$this->load->view('pages/footer');
	}   
}
