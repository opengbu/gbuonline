
<!--this controller contains functions that cannot be grouped with any category -->

<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Feat extends CI_Controller {
		
	public function vnb()
	{
       	$data['title'] = 'Notice Board &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Virtual Notice Board ';
		$data['message'] = 'Get Notified About Everything...';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/notices/virtual_notice_board');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		 
	}
	
    public function events()
	{
        $data['title'] = 'Events &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' University Events ';
		$data['message'] = 'Involve, Innovate and Learn ...';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/events/events');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		
	}

	public function read_events()
	{
        $data['title'] = 'Events &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' University Events ';
		$data['message'] = 'Involve, Innovate and Learn ...';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/events/read_events');
		$this->load->view('pages/common/footer');
		
	}
	
	public function opportunities()
	{
        $data['title'] = 'Opportunities &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Opportunities ';
		$data['message'] = 'Help us to improve and maintain GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/opportunities');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function ggroups()
	{
        $data['title'] = 'Google Groups &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = 'Google Groups';
		$data['message'] = 'All of your discussions in one place ';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/ggroups');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function tou()
	{
        $data['title'] = 'TOU &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = 'Terms of Use ';
		$data['message'] = 'Legal Information & Notices  ';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/tou');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function development()
	{
        $data['title'] = 'Releases &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Releases';
		$data['message'] = 'Updates and Development  ';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/development');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function feedback()
	{
        $data['title'] = 'Feedback &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Feedback';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/feedback');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function placements()
	{
        $data['title'] = 'Placements &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Placements';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/placements');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function downloads()
	{
        $data['title'] = 'Downloads &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Downloads';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/downloads');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function student_chapters()
	{
        $data['title'] = 'Student Chapters &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Student Chapters';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/student_chapters');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
}	
