<?php

class New_school extends CI_Controller {


    function index() 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {
            redirect('/login');
        }
        if($this->session->userdata('type')!='admin')
        {
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin to view this page";
            $this->load->view('common/footer');
            return 0;
        }
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('sc_name', 'Schools name', 'required');
        $this->form_validation->set_rules('sc_full_name', 'Schools full name', 'required');

        
        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Newtable_form');
        }
        else 
        {
             $sc_name =   $this->input->post('sc_name');
             $sc_full_name =   $this->input->post('sc_full_name');
             $about_us =   $this->input->post('about_us');
             $course_structure =   $this->input->post('course_structure');
             $faculty =   $this->input->post('faculty');
             $placements =   $this->input->post('placements');
             
             $query2=$this->db->query("insert into schools (sc_name,sc_full_name,about_us,course_structure,faculty,placements) values ('$sc_name','$sc_full_name','$about_us','$course_structure','$faculty','$placements')");
             
             redirect('/All_schools');
        }
        
        $this->load->view('common/footer');
    }
}
