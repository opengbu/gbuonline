<?php

class All_blogs extends CI_Controller{
    function index()
    {
        $this->load->view('common/header');
        $this->load->view('View_all_blogs');
        $this->load->view('common/footer');
    }
}