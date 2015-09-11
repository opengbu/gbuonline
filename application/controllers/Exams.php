<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

	public function exams_home()
	{
        $data['title'] = 'Exam Papers &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Previous Year Papers ';
		$data['message'] = 'Increase your chances of scoring high marks.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/exams_home');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	public function view($sc_name)
        {
            
            $data ['title'] = 'Exam Papers &nbsp;|&nbsp;  GBU Online';
            $data ['heading'] =  $sc_name.' Exam Papers ';
            $data['message'] =  'Increase your chances of scoring high marks.';
            $this->load->view('pages/common/link',$data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading',$data);
            
            $data['sc_name'] = $sc_name;
            
            $this->load->view('pages/exams/exams_info',$data);
            $this->load->view('pages/common/extras');
            $this->load->view('pages/common/footer');
        }
}
