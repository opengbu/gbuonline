<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index() {
        $data['news'] = $this->news_model->get_news();

        $data['title'] = 'News Section &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' News Section ';
        $data['message'] = 'Happenings at GBU ...';


        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/news/index', $data);
        $this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
    }

    public function view() {

        $id = $this->input->get('id');
        $data['news'] = $this->news_model->get_news();
        $data['news_item'] = $this->news_model->get_news($id);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = 'News Section &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = $data['news_item']['title'];
        $data['message'] = $data['news_item']['slug'];


        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/news/view', $data);
        $this->load->view('pages/common/footer');
    }

}
