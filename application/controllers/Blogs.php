<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
	public function master_blogs()
	{
        $data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Blog Space ';
		$data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/blogs/master_blogs');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
	}
	
	public function recent_blogs()
	{
      
		$this->load->view('pages/blogs/recent_blogs');
		
	}
	public function write_blogs()
	{
		
	    $this->load->view('pages/blogs/write_blogs');
		
	}
        /*
         * Note by varun.
         * Bhawesh was using write blogs to save the blogs 
         * But Rajat has removed header and footer files from code due to his ajax
         * implementation...
         * and since it is not a good idea to save data in db when the function is called,
         * I am making another f'n
         */
        public function save()
        {
            $this->load->model('blog_model');
            $this->blog_model->insert_into_db();
            redirect('blogs/master_blogs');
        }
        public function best_blogs()
	{
       
		$this->load->view('pages/blogs/best_blogs');
		
	}
	public function read_blogs()
	{
       
		$data['title'] = 'Blog Space &nbsp;|&nbsp;  GBU Online';
		$data['heading'] = ' Blog Space ';
		$data['message'] = 'Keep Calm and Write.....';
        $this->load->view('pages/common/link',$data);
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/page-heading',$data);
		$this->load->view('pages/blogs/read_blogs');
		$this->load->view('pages/common/extras');
		$this->load->view('pages/common/footer');
		
	}
		
}
