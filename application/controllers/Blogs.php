<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function head() {
		$data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' Blog Space ';
        $data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
   }
   
   public function foot() {
		$this->load->view('pages/common/extras');
        $this->load->view('pages/common/footer');
   }

    public function recent_blogs() {
		$this->head();
        $this->load->view('pages/blogs/recent_blogs');
        $this->foot();
    }

    public function write_blogs() {
        if ($this->session->userdata('loggedin') != 1) //student/user/admin logged in
            redirect('users?redirect=' . current_url());
		$this->load->library('form_validation');
		$this->head();
        $this->load->view('pages/blogs/write_blogs');
        $this->foot();
    }
	
	public function your_blogs() {
        if ($this->session->userdata('loggedin') != 1) //student/user/admin logged in
            redirect('users?redirect=' . current_url());
		$this->head();
        $this->load->view('pages/blogs/your_blogs');
        $this->foot();
    }

    public function best_blogs() {
        $this->head();
        $this->load->view('pages/blogs/best_blogs');
		$this->foot();
    }

    public function read_blogs() {
        $this->head();
        $this->load->view('pages/blogs/read_blogs');
        $this->foot();
    }

    public function save() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Blog Title', 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Blog Content', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->write_blogs();
		}
		else
		{
			$this->load->model('blog_model');
			$this->blog_model->insert_into_db();
			$this->session->set_flashdata('submit_msg', '<script> alert("Your blog has been submitted for approval !"); </script>');
			redirect('blogs/recent_blogs');
		}
     
    }
	
	public function edit_blogs($id) {
		if ($this->session->userdata('loggedin') != 1) //student/user/admin logged in
            redirect('users?redirect=' . current_url());
        $this->head();
		$blog_id['id']=$id;
		$this->load->view('pages/blogs/edit_blogs',$blog_id);
		$this->foot();
    }
	
	public function edit() {
        $this->load->model('blog_model');
        $this->blog_model->edit_into_db();
		$this->session->set_flashdata('edit_msg', '<script> alert("Your UPDATED blog has been submitted for approval !"); </script>');
        redirect('blogs/your_blogs');
    }
	
	public function delete($id) {
		if ($this->session->userdata('loggedin') != 1) //student/user/admin logged in
            redirect('users?redirect=' . current_url());
		$check_del = $this->db->query("select user_id from blog where id = '$id';");
		if($this->session->userdata("user_id") ==  $check_del->row()->user_id)
		{
			$this->load->model('blog_model');
			$this->blog_model->del_from_db($id);
			$this->session->set_flashdata('del_msg', '<script> alert("Your blog has been permanently deleted !!"); </script>');
			redirect('blogs/your_blogs');
		}
		else
		{
			redirect('', 'location');
			exit();
		}
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
