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

class Manage_uploads extends CI_Controller {

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

    function index() {

        $this->secure_hard();
        $this->load->helper('file');
        $this->load->view('common/header');
        $this->load->view('View_all_media');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();
        $image = $this->input->get("image");
        unlink("../user_uploads/" . $image);
        $this->logger->insert("Deleted resource user_uploads/$image",TRUE);
        redirect('/manage_uploads');
    }

}
