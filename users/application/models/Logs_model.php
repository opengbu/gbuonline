<?php

/*
 *  Created on :Sep 30, 2015, 12:11:00 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class Logs_model extends CI_Model {

    function __construct() {
        parent::__construct();
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

        if ($user_agent == TRUE) {
            $data['action'] = $data['action'] . ' (' . $this->input->user_agent() . ' ) ';
        }

        if ($ip_address == TRUE) {
            $data['action'] = $this->input->ip_address() . ' - ' . $data['action'];
        }

        $this->db->insert('logs', $data);
    }

}
