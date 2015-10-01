<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_upload extends CI_Controller {

    function secure_hard() {
        if ($this->permissions->get_level() == 0) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        return 1;
    }

    public function do_upload() {
        $directory = "../user_uploads/" . $this->input->post('directory');
        $config = array(
            'upload_path' => $directory,
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx|ppt|pptx|bmp",
            'overwrite' => FALSE,
            'max_size' => "20480000"
        );

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $this->load->library('upload', $config);
        $this->load->helper(array('form', 'url'));

        if ($this->upload->do_upload()) {
            $data = $this->upload->data();
            $file_name = $data['file_name'];
            $this->logger->insert("Uploaded file /user_uploads/" . $this->input->post('directory') . '/' . $file_name);
            redirect('manage_uploads');
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('common/header');
            $this->load->view('file_view', $error);
            $this->load->view('common/footer');
        }
    }

}
