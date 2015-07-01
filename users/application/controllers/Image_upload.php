<?php
/*
 * This was not orignally written by me. All credit goes to http://www.formget.com/codeigniter-upload-image/
 * It looked it would work as it is, so I copied it, and modified it a bit.
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