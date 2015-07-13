<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

	public function exams_home()
	{
        $data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Exam-Section ';
		$data['message'] = 'Previous Year Papers';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/py_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function soict()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOICT Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/soict_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sobsc()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOBSC Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/sobsc_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function soe()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOE Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/soe_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sobt()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOBT Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/sobt_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function som()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOM Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/som_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function soljg()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOLJG Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/soljg_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sohss()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOHSS Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/sohss_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
        
        public function sovsas()
	{
		$data['title'] = 'Exams &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' SOVSAS Question Papers ';
		$data['message'] = 'Practice makes a man perfect.';
		$this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/exams/sovsas_papers');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
}
