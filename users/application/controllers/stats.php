<?php
    class Stats extends CI_Controller
    {
        function index()
        {
            if($this->session->userdata('type') != 'admin'){
             
                redirect('/login');
            }
            
            $this->load->view('common/header');
            $this->load->view('view_stats');
            $this->load->view('common/footer');
        }
    }
?>