<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {
        
        public function view($club_name)
        {
            /*
             * Note by varun...
             * I am using this function to render all the clubs
             * Instead of having like 9 functions seperate
             * Rest functions are commented out, and can be deleted
             * This will help in creating and deleting clubs, and prevent redundancy
             */
            $club_header_info_q = $this->db->query("select c_full_name, tagline from clubs where c_name = '$club_name'");
            $club_header_info = $club_header_info_q->row();
            $data ['title'] = $club_header_info->c_full_name . '&nbsp;|&nbsp;  GBU Online';
            $data ['heading'] = $club_header_info->c_full_name;
            $data['message'] =  $club_header_info->tagline;
            $this->load->view('pages/common/link',$data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading',$data);
            
            $c_info['c_name'] = $club_name;
            
            $this->load->view('pages/clubs/club_info',$c_info);
            $this->load->view('pages/common/extras');
            $this->load->view('pages/common/footer');
        }

        /*
        public function robotics()
	{
		$data['title'] = 'Robotics Club &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Robotics Club ';
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
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
		$data['message'] = 'Discover Yourself...';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/clubs/photography');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	*/
}
