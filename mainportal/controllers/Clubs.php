<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {
        
        public function home()
		{
			$data ['title'] = 'Clubs &nbsp;|&nbsp;  GBU Online';
            $data ['heading'] = 'Official Clubs';
            $data['message'] =  'Discover Yourself...';
            $this->load->view('pages/common/link',$data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading',$data);
			$this->load->view('pages/clubs/clubs_home');
            $this->load->view('pages/common/extras');
            $this->load->view('pages/common/footer');
		}
		
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
		
}
