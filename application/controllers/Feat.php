
<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

// this controller contains functions that cannot be grouped with any category

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
	
	public function opportunities()
	{
        $data['title'] = 'Opportunities &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Opportunities ';
		$data['message'] = 'Help us to improve and maintain GBU Online';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/opportunities');
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
		$this->load->view('pages/footer_pages/ggroups');
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
		$this->load->view('pages/footer_pages/tou');
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
        $data['title'] = 'Feedback  &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Feedback Form';
		$data['message'] = '';
		
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/feedback');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function validate_feedback() 
	{    
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", "required|alpha");
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('subject', 'Subject', 'required|min_length[5]');
		$this->form_validation->set_rules('message', 'Message', 'required|max_length[150]');
		
	if ($this->form_validation->run() == FALSE)
		{
			$this->feedback();
		}
		else
		{
			$this->save_feedback();
		}
    } 
	
	public function save_feedback() {
        $this->load->model('feedback_model');
		$this->feedback_model->fb();
		$this->session->set_flashdata('fb_msg', '<script> alert("Thanks for your feedback !"); </script>');
        redirect('feat/feedback');
    }
	public function placements()
	{
        $data['title'] = 'Placements &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Placements';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/placements');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function downloads()
	{
		$this->load->helper('text');
	   $data['title'] = 'Downloads &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Downloads';
		$data['message'] = '';
		if(null != $this->input->get("query"))
		$data['query'] = $this->input->get("query");
		else $data['query'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/downloads');
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
		$this->load->view('pages/footer_pages/student_chapters');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function contributors()
	{
        $data['title'] = 'Contributors &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Contributors';
		$data['message'] = 'The team behind GBU Online !!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/contributors');
		$this->load->view('pages/common/footer');
	}
	
	public function search_results()
	{
        $data['title'] = 'Search Results &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Search Results';
		$data['message'] = '';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/googlecse');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function advertise()
	{
        $data['title'] = 'Advertise &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Advertise';
		$data['message'] = 'A platform to promote your product !!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/advertise');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function open_source()
	{
		$data['title'] = 'Open-Source &nbsp;|&nbsp;  GBU Online';
		$data['heading'] ='Open-Source Credits';
		$data['message'] = 'We thank every open-source developer for their contribution !!';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/footer_pages/open_source');
		$this->load->view('pages/common/footer');
	}
	
}	
