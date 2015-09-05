<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
class Image_upload extends CI_Controller {

    public function index() {
        $this->load->view('common/header');
        $this->load->view('file_view', array('error' => ' '));
        $this->load->view('common/footer');
    }

    public function do_upload() {
        $config = array(
            'upload_path' => "../resources/user_uploads",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => FALSE,
            'max_size' => "2048000"
            //,'max_height' => "768",
            //'max_width' => "1024"
        );
        $this->load->library('upload', $config);
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