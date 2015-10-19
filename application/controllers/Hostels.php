<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostels extends CI_Controller {

	public function home()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/hostels/home');
		$this->load->view('pages/common/footer');
	}
    public function studentinfo()
    {
        if($this->session->userdata('loggedin') != 1) //student/user/admin logged in
        redirect ('users?redirect='.current_url());
        
        $data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/hostels/studentinfo');
		$this->load->view('pages/common/footer');
    }
     public function stuspecific()
    {
    
        $data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/hostels/stuspecific');
		$this->load->view('pages/common/footer');
    }
	public function info()
	{
            /*
             * Note by Varun...
             * Looks like this code is used to go to a login page and then to specific
             * I will redirect it directly to specific where it will send to /user/login if not logged in
             * this is not to get user logged in (which is now added in specific)
             * but also to prevent user direcly going to specific by knowing controller name
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
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/notice');
		$this->load->view('pages/common/footer');
	}
        public function date_so()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' Hostel Notice Board ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/date_so');
		$this->load->view('pages/common/footer');
	}
	public function department_so()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' Hostel Notice Board ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/department_so');
		$this->load->view('pages/common/footer');
	}
        public function hostels_so()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' Hostel Notice Board ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/hostels_so');
		$this->load->view('pages/common/footer');
	}
        
	
	public function wardens()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' List of Wardens ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/wardens');
		$this->load->view('pages/common/footer');
	}
        public function hname()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' List of Wardens ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/hname');
		$this->load->view('pages/common/footer');
	}
        public function wname()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' List of Wardens ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/wname');
		$this->load->view('pages/common/footer');
	}
        public function woffice()
	{
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		//$data['heading'] = ' List of Wardens ';
		//$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		//$this->load->view('pages/page-heading',$data);
		$this->load->view('pages/hostels/woffice');
		$this->load->view('pages/common/footer');
	}
	
	public function specific()
	{
            
                /*
                 * Note by Varun... 
                 * I am redirecting it to login page if not logged in
                 * It will come back to this page on authentication
                 */
                if($this->session->userdata('loggedin') != 1) //student/user/admin logged in
                    redirect ('users?redirect='.current_url());
            
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/hostels/specific');
		$this->load->view('pages/common/footer');
	}   
    	public function rc()
	{
                    if($this->session->userdata('loggedin') != 1) //student/user/admin logged in
                    redirect ('users?redirect='.current_url());
		$data['title'] = 'Hostels &nbsp;|&nbsp;  GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/hostels/rc');
		$this->load->view('pages/common/footer');

	}
    public function insert_request(){
        $this->load->model('roomChangeModel');
		$this->roomChangeModel->rc();
        
        //Taken By Feat
        $this->session->set_flashdata('rcMsg', '<script> alert("Yor request has been sent!"); </script>');
        redirect('Hostels/rc');
        
    }
        
    }
