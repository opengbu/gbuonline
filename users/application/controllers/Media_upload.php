<?php

/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 
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
            echo $this->load->view('common/header', '', TRUE);
            ?>
            <div class="col-sm-6 col-md-6">
			<div class="alert alert-success centered-form">

                    <span class="glyphicon glyphicon-ok"></span> <strong>Success</strong>
                    <hr class="message-inner-separator">
					Image successfully Uploaded
                    <p>
                    </p>
                </div>
            </div>
			<?php
            echo $this->load->view('common/footer', '', TRUE);
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('common/header');
            $this->load->view('file_view', $error);
            $this->load->view('common/footer');
        }
    }

}
