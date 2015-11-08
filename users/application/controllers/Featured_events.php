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

class Featured_events extends CI_Controller {

    function get_title($id) {
        $query = $this->db->query("select title from events where id = '$id'");
        if ($query->num_rows() == 0)
            return "Blank";
        $result = $query->row();
        return $result->title;
    }

    function index() {

        if ($this->permissions->get_level() < 1) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);

            return 0;
        }


        $this->load->view('common/header');
        $this->load->view('Featured_events_form.php');
        $this->load->view('common/footer');
    }

    function save() {
        if ($this->session->userdata('loggedin') != 1) {
            redirect('/login');
        }
        if ($this->permissions->get_level() < 2) {
            $this->load->view('common/header');
            echo "<br><br><br>You must contact Content Head to manage upcoming events";
            $this->load->view('common/footer');
            return 0;
        }
        $list = NULL;
        $current_q = $this->db->query('select * from featured_events');
        foreach ($current_q->result() as $row) {
            $list[$row->id] = $row->event_id;
        }
        for ($i = 1; $i <= 5; $i++) {
            $event_id = $this->input->post("id" . $i);
            if ($event_id != $list[$i]) {
                $this->logger->insert("Changed featured event number $i from " . $this->get_title($list[$i]) . ' to ' . $this->get_title($event_id));
                $this->db->query("update featured_events set event_id = '$event_id' where id = '$i'");
            }
        }
        redirect('/Featured_events');
    }

}
