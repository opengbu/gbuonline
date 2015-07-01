<?php

class Manage_upcoming extends CI_Controller {


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
        
        
        $this->load->view('common/header');
        $this->load->view('upcomingevents_form');
        $this->load->view('common/footer');
    }
    function save()
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
        for($i=1;$i<5;$i++)
        {
            $event_id = $this->input->post("id".$i);
            $this->db->query("update upcoming_events set event_id = '$event_id' where id = '$i'");
        }
        redirect('/manage_upcoming');
    }
}
