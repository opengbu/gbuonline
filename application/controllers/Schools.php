<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {

	public function view($school_name)
    {
            $school_header_info_q = $this->db->query("select sc_full_name, tagline from schools where sc_name = '$school_name'");
            $school_header_info = $school_header_info_q->row();
            $data ['title'] = strtoupper($school_name) . '&nbsp;|&nbsp;  GBU Online';
            $data ['heading'] = $school_header_info->sc_full_name;
            $data['message'] =  $school_header_info->tagline;
			$data['school_name'] = $school_name;
            $this->load->view('pages/common/link',$data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading',$data);
            $this->load->view('pages/schools/school_info',$school_name);
            $this->load->view('pages/common/extras');
            $this->load->view('pages/common/footer');
	}
	
}
