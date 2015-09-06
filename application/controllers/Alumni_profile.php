<?php

/*
 *  Created on :Sep 02, 2015, 2:20:36 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Alumni_profile extends CI_Controller {

    function basic_form_1() {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('dob', 'Date Of birth', 'required|max_length[100]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('marital_status', 'Marital status', 'required|max_length[100]');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    }

    function basic_form_2() {

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('start_year', 'Start Year', 'required|max_length[15]');
        $this->form_validation->set_rules('end_year', 'End Year (Enter CURRENT in case of ongoing)', 'required|max_length[15]');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|max_length[50]');
        $this->form_validation->set_rules('location', 'Location', 'max_length[100]');
        $this->form_validation->set_rules('designation', 'Designation', 'required|max_length[100]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    }

    function basic_form_3() {

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('start_year', 'Start Year', 'required|max_length[15]');
        $this->form_validation->set_rules('passout_year', 'passout Year', 'required|max_length[15]');
        $this->form_validation->set_rules('course_name', 'Course Name', 'required|max_length[50]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    }

    function create() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $check_q = $this->db->query("select count(*) as profiles from alumni_basic where user_id = '" . $this->session->userdata('user_id') . "'");
        $check = $check_q->row();
        if ($check->profiles >= 1)
            redirect('alumni_profile/update');

        $this->basic_form_1();


        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
			$data['x'] = '6';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
			$this->load->view('pages/alumni/nav', $data);
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


            $this->db->insert('alumni_basic', $form_data);

            redirect('Alumni_profile/success');
        }
    }

    function update() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $check_q = $this->db->query("select count(*) as profiles from alumni_basic where user_id = '" . $this->session->userdata('user_id') . "'");
        $check = $check_q->row();
        if ($check->profiles == 0)
            redirect('alumni_profile/create');

        $this->basic_form_1();

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            set_value('dob', '333');
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
			$data['x'] = '6';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
			$this->load->view('pages/alumni/nav', $data);

            $query = $this->db->get_where('alumni_basic', array('user_id' => $this->session->userdata('user_id')));

            $form_data = $query->row();

            $this->load->view('pages/alumni/create_profile', $form_data);
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'dob' => set_value('dob'),
                'address' => set_value('address'),
                'gender' => set_value('gender'),
                'marital_status' => set_value('marital_status')
            );


            $this->db->update('alumni_basic', $form_data, "user_id = '" . $form_data['user_id'] . "'");
            redirect('Alumni_profile/update');
        }
    }

    function view_work_info() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = '6';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $u_info['user_id'] = $this->session->userdata('user_id');
        $this->load->view('pages/alumni/work_info', $u_info);
        $this->load->view('pages/common/footer');
    }

    function add_work_info() {

        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);
        $this->basic_form_2();

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
			$data['x'] = '6';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
			$this->load->view('pages/alumni/nav', $data);
            $this->load->view('pages/alumni/work_info_form');
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'start_year' => set_value('start_year'),
                'end_year' => set_value('end_year'),
                'company_name' => set_value('company_name'),
                'location' => set_value('location'),
                'designation' => set_value('designation')
            );

            $this->db->insert('work_details', $form_data);
            redirect('Alumni_profile/view_work_info');
        }
    }

    function edit_work_info() {

        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $this->basic_form_2();

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
			$data['x'] = '6';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
			$this->load->view('pages/alumni/nav', $data);

            $query = $this->db->get_where('work_details', array('id' => $this->input->get('work_id')));

            $form_data = $query->row();

            $this->load->view('pages/alumni/work_info_form', $form_data);
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'start_year' => set_value('start_year'),
                'end_year' => set_value('end_year'),
                'company_name' => set_value('company_name'),
                'location' => set_value('location'),
                'designation' => set_value('designation')
            );

            $this->db->update('work_details', $form_data, "id = '" . $this->input->get('work_id') . "'");
            redirect('Alumni_profile/view_work_info');
        }
    }

    function delete_work() {

        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $work_id = $this->input->get('work_id');
        $this->db->query("delete from work_details where id = '$work_id'");
        redirect('Alumni_profile/view_work_info');
    }

    function view_education_info() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = '6';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $u_info['user_id'] = $this->session->userdata('user_id');
        $this->load->view('pages/alumni/edu_info', $u_info);
        $this->load->view('pages/common/footer');
    }

    function add_education_info() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $this->basic_form_3();


        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
			$data['x'] = '6';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
			$this->load->view('pages/alumni/nav', $data);
            $this->load->view('pages/alumni/edu_info_form');
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'start_year' => set_value('start_year'),
                'passout_year' => set_value('passout_year'),
                'course_name' => set_value('course_name'),
            );


            $this->db->insert('edu_info', $form_data);

            redirect('Alumni_profile/view_education_info');
        }
    }

    function edit_education_info() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $this->basic_form_3();


        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
			$data['x'] = '6';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
			$this->load->view('pages/alumni/nav', $data);

            $query = $this->db->get_where('edu_info', array('id' => $this->input->get('edu_id')));
            $form_data = $query->row();

            $this->load->view('pages/alumni/edu_info_form', $form_data);
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'start_year' => set_value('start_year'),
                'passout_year' => set_value('passout_year'),
                'course_name' => set_value('course_name'),
            );

            $this->db->update('edu_info', $form_data, "id = '" . $this->input->get('edu_id') . "'");
            redirect('Alumni_profile/view_education_info');
        }
    }

    function delete_edu() {

        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $edu_id = $this->input->get('edu_id');
        $this->db->query("delete from edu_info where id = '$edu_id'");
        redirect('Alumni_profile/view_education_info');
    }

    function index() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = '6';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/all_alumni');
        $this->load->view('pages/common/footer');
    }

    function load_profile() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . base_url('alumni_profile'));

        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
		$data['x'] = '6';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
		$this->load->view('pages/alumni/nav', $data);
        $this->load->view('pages/alumni/load_profile');
        $this->load->view('pages/common/footer');
    }

}
