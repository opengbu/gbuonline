<?php

class Alumni_profile extends CI_Controller {

    function create() {
        if($this->session->userdata('loggedin')!=1)
            redirect ('/users?redirect=' . current_url ());
        
        $check_q = $this->db->query("select count(*) as profiles from alumni_basic where user_id = '".$this->session->userdata('user_id')."'");
        $check = $check_q->row();
        if($check->profiles >=1 ) redirect ('alumni_profile');
        
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('dob', 'Date Of birth', 'required|max_length[100]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('marital_status', 'Marital status', 'required|max_length[100]');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
            $this->load->view('pages/alumni/create_profile');
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'dob' => set_value('dob'),
                'address' => set_value('address'),
                'gender' => set_value('gender'),
                'marital_status' => set_value('marital_status')
            );

            
            if ($this->SaveForm($form_data) == TRUE) { // the information has therefore been successfully saved in the db
                redirect('Alumni_profile/success');   // or whatever logic needs to occur
            } else {
                echo 'An error occurred saving your information. Please try again later';
                // Or whatever error handling is necessary
            }
        }
    }

    function SaveForm($form_data) {
        $this->db->insert('alumni_basic', $form_data);

        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }

        return FALSE;
    }

    function view() {
        
    }

}
