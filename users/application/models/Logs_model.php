<?php

/*
 *  Created on :Sep 30, 2015, 12:11:00 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Logs_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insert($action, $user_agent = FALSE, $ip_address = FALSE) {
        $data = array(
            'user_id' => $this->session->user_id('user_id'),
            'time' => date('H:i:s'),
            'date' => date('Y-m-d'),
            'action' => $action
        );

        if ($user_agent == TRUE) {
            $data['action'] = $this->input->user_agent() . $data['action'];
        }

        if ($ip_address == TRUE) {
            $data['action'] = $this->input->ip_address() . $data['action'];
        }

        $this->db->insert('logs', $data);
    }

}
