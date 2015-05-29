<?php
class Edit_post extends CI_Controller {


    function index() 
    {
        if ($this->session->userdata('loggedin') != 1) 
        {//Checking for authentication
            redirect('/login');
        }
        $scl=$this->input->get('scl');
        $id=$this->input->get('id');
        
        if($scl==null || $id==null) redirect ('all_posts');//wrong url?

        $current_user_id = $this->session->userdata('user_id');
        $query = $this->db->query("select * from $scl where id = '$id'");
        foreach($query->result() as $row)
        {//to determine publishing_users id
            $a_user_id = $row->user_id;
        }
        if($this->session->userdata('type')!='admin' and $a_user_id!=$current_user_id)
        {//more security!
            $this->load->view('common/header');
            echo "<br><br><br>You must be admin or publishing user to edit this article";
            $this->load->view('common/footer');
            return 0;
        }
        
        $this->session->set_userdata('edit_scl',$scl);
        $this->session->set_userdata('edit_id',$id);
        
        echo $scl."<br>".$id;
        
        $this->form_validation->set_rules('article_name', 'Article_name', 'required');
        $this->form_validation->set_rules('publishing_date', 'publishing_date', 'required');
        

        
        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Editpost_form');
        }
        else 
        {
             $article_name =   $this->input->post('article_name');
             $article =   $this->input->post('article');
             $publishing_date =   $this->input->post('publishing_date');
             $scl=$this->input->post('scl');
             $id=$this->input->post('id');
            
            $query=$this->db->query("update $scl set article_name = '$article_name',article = '$article',publishing_date='$publishing_date' where id=$id");
             echo "update $scl set article_name = '$article_name',article = '$article',publishing_date='$publishing_date' where id=$id";
             redirect('/All_posts');
        }
        $this->load->view('common/footer');
    }
}