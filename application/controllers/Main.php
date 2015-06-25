<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->homepage();
	}
      
        public function homepage()
	{
		$this->load->view('pages/homepage');
		
    }
	
	   
}
