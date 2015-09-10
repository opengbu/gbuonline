<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Media_upload extends CI_Controller {

    function secure_soft() {
        if ($this->session->userdata('loggedin') != 1) {//Checking for authentication
            redirect('/login');
            die();
        }
    }

    function secure_hard() {
        $this->secure_soft();
        if ($this->permissions->get_level() == 0) {
            $this->load->view('common/header');
            echo "<br><br><br>Insufficient Privelleges. Please Contact Our Content Head";
            $this->load->view('common/footer');
            die();
        }
        return 1;
    }

    public function do_upload() {
        $config = array(
            'upload_path' => "../resources/" . $this->input->post('directory'),
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx",
            'overwrite' => FALSE,
            'max_size' => "2048000"
        );
        $this->load->library('upload', $config);
        $this->load->helper(array('form', 'url'));


        if ($this->upload->do_upload()) {
            $data = array('upload_data' => $this->upload->data());
            redirect('manage_uploads');
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('common/header');
            $this->load->view('file_view', $error);
            $this->load->view('common/footer');
        }
    }

}

?>