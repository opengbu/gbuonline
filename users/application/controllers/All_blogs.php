<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class All_blogs extends CI_Controller{
    function index()
    {
        $this->load->view('common/header');
        $this->load->view('View_all_blogs');
        $this->load->view('common/footer');
    }
}