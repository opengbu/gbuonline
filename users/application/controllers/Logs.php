<?php

/*
 *  Created on :Sep 30, 2015, 3:13:48 AM
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

class Logs extends CI_Controller {

    function index() {
        $this->view_all();
    }

    function secure_hard() {
        if ($this->permissions->get_level() < 3) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. This section is only for users type moderator and above";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        return 1;
    }
    function view_all() {
        $this->secure_hard();
        $this->load->view('common/header');
        $this->load->view('Logs_AllRecords');
        $this->load->view('common/footer');
    }

}
