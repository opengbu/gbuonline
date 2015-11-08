<?php

/*
 *  Created on :Sep 30, 2015, 12:11:00 AM
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

class Logs_model extends CI_Model {

    var $user_id;

    function __construct() {
        parent::__construct();
        $user_id = $this->session->user_id;
    }

    function insert($action, $ip_address = FALSE, $user_agent = FALSE, $user_id = NULL) {
        $data = array(
            'time' => date('H:i:s'),
            'date' => date('Y-m-d'),
            'action' => $action
        );
        if ($user_id == NULL)
            $data['user_id'] = $this->session->userdata('user_id');
        else
            $data['user_id'] = $user_id;

        if ($user_id == NULL)
            $user_id = $this->user_id;

        if ($user_agent == TRUE) {
            $data['action'] = $data['action'] . ' (' . $this->input->user_agent() . ' ) ';
        }

        if ($ip_address == TRUE) {
            $data['action'] = $this->input->ip_address() . ' - ' . $data['action'];
        }

        $this->db->insert('logs', $data);
    }

}
