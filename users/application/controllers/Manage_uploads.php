<?php

class Manage_uploads extends CI_Controller {


    function index() 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {
            redirect('/login');
        }
        if($this->session->userdata('type')=='student')
        {
            $this->load->view('common/header');
            echo "<br><br><br>You cannot view this page";
            $this->load->view('common/footer');
            return 0;
        }
        $this->load->helper('file');
        $this->load->view('common/header');
        $this->load->view('View_all_images');
        $this->load->view('common/footer');
    }
    function delete()
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
        $image = $this->input->get("image");
        unlink("../resources/user_uploads/".$image);
        redirect('/manage_uploads');
    }
}
