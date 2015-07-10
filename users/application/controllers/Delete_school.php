<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

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
            $this->db->query("delete from events where school = '$table'");
            redirect('/All_schools');
    }
}
