<?php


class Delete_school extends CI_Controller {

    public function index($table = 'none')
    {
             if ($this->session->userdata('loggedin') != 1) 
            {//Checking for authentication
                redirect('/login');
            }
            if($this->session->userdata('type')!='admin')
            {
                $this->load->view('common/header');
                echo "<br><br><br>You must be admin to acces this page";
                $this->load->view('common/footer');
                return 0;
            }
            if($table=='none') redirect('/All_schools');
            echo $table;
            $this->db->query("delete from schools where sc_name='$table'");
            $this->db->query("drop table $table");
            redirect('/All_schools');
    }
}
