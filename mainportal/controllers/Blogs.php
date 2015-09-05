<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

    public function recent_blogs() {
        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Blog Space ';
        $data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/blogs/recent_blogs');
        $this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
    }

    public function write_blogs() {
        if ($this->session->userdata('loggedin') != 1) //student/user/admin logged in
            redirect('users?redirect=' . current_url());

        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Blog Space ';
        $data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/blogs/write_blogs');
        $this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
    }

    public function best_blogs() {
        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Blog Space ';
        $data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/blogs/best_blogs');
        $this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
    }

    public function read_blogs() {
        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Blog Space ';
        $data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $this->load->view('pages/blogs/read_blogs');
        $this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
    }

    public function save() {
        $this->load->model('blog_model');
        $this->blog_model->insert_into_db();
        redirect('blogs/recent_blogs');
    }

    public function like() {

        if ($this->session->userdata('loggedin') != 1) //student/user/admin logged in
            redirect('users?redirect=' . current_url() . "?" . $_SERVER['QUERY_STRING']);

        $blog_id = $this->input->get("blog_id");
        $user_id = $this->session->userdata("user_id");

        $num = $this->db->query("select * from blog_likes where blog_id = '$blog_id' and user_id = '$user_id'");
        if ($num->num_rows() == 0)
            $this->db->query("insert into blog_likes (blog_id,user_id) VALUES ('$blog_id', '$user_id')");
        else
            $this->db->query("delete from blog_likes where blog_id = '$blog_id' and user_id = '$user_id'");
             
        if (isset($_REQUEST['redirect2']) && $_REQUEST['redirect2'] != "") //anyone wants to get back            
            redirect($_REQUEST['redirect2']);
        else
            redirect('blogs/recent_blogs');
    }

}
