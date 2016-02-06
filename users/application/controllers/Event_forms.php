<?php

/*
 *  Created on :Feb 07, 2016, 4:27:12 AM
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

class Event_forms extends CI_Controller {

    function index() {
        redirect(base_url() . 'Event_forms/view_all');
    }

    function secure_hard() {
        if ($this->permissions->get_level() >= 2)
            return 1;
        $query = $this->db->get_where('event_form_list', array('id' => $this->input->get('event_form_id')));
        if ($query->num_rows() == 0) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "No such Event formexists";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        $form_data = $query->row();
        if ($form_data->user_id == $this->session->userdata('user_id'))
            return 1;
        echo $this->load->view('common/header', '', TRUE);
        $message['errors'] = "This is not your post";
        echo $this->load->view('Error_message', $message, TRUE);
        echo $this->load->view('common/footer', '', TRUE);
        die();
    }

    function CreateOrUpdate() {

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('event_id', 'Event name', 'required');
        $this->form_validation->set_rules('max_participants', 'Maximum Participants', 'required|callback_min_check');

        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("event_form_id") != NULL) {
                $this->secure_hard();
                $query = $this->db->get_where('event_form_list', array('id' => $this->input->get('event_form_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Event Form exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Event_forms_form', $form_data);
            } else
                $this->load->view('Event_forms_form');
        } else {
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'event_id' => html_purify($this->input->post('event_id')),
                'max_participants' => html_purify($this->input->post('max_participants')),
                'extra_info_title' => html_purify($this->input->post('extra_info_title')),
            );
            if ($this->input->get('event_form_id') != "") { // update
                $this->secure_hard();
                $this->db->update('event_form_list', $form_data, " id = '" . $this->input->get('event_form_id') . "'");
                $this->logger->insert('Updated event form ' . html_purify($this->input->post('title')) . ' (' . $this->input->get('event_form_id') . ')');
            } else {
                $this->db->insert('event_form_list', $form_data);
                $this->logger->insert('Created event form ' . html_purify($this->input->post('title')));
            }
            redirect(base_url() . 'Event_forms/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('Event_forms_all');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();


        $this->db->query("delete from event_form_list where id = '" . $this->input->get('event_form_id') . "'");

        $this->logger->insert('Deleted event form (' . $this->input->get('event_form_id') . ')', TRUE);

        redirect(base_url() . 'Event_forms/view_all');
    }

    function min_check($num) {
        if ($num < 1) {
            $this->form_validation->set_message(
                    'min_check', 'Maximum Participants should be atleast 1'
            );
            return FALSE;
        }
        return TRUE;
    }

}
