<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index() {
        $data['news'] = $this->news_model->get_news();

   $data['newstitle'] = 'News Section &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' News Section ';
        $data['message'] = 'Happenings at GBU ...';


        $this->load->view('pages/link', $data);
        $this->load->view('pages/header');
        $this->load->view('pages/page-heading', $data);
        $this->load->view('pages/news/index', $data);
        //$this->load->view('templates/footer');
    }

    public function view($slug = NULL) {
        
        $data['news'] = $this->news_model->get_news();
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $data['newstitle'] = 'News Section &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' News Section ';
        $data['message'] = 'Happenings at GBU ...';


        $this->load->view('pages/link', $data);
        $this->load->view('pages/header');
        $this->load->view('pages/page-heading', $data);
        $this->load->view('pages/news/view', $data);
        // $this->load->view('templates/footer');
    }
    
    

}
