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
        if ($this->permissions->get_level() == 0) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact Our Content Head";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        return 1;
    }

    function CreateOrUpdate() {
        $this->secure_hard();

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

    function Register() {
        $event_form_id = $this->input->get('event_form_id');
        $event_form_details_q = $this->db->query("select event_form_list.*, events.title  from event_form_list, events "
                . " where event_form_list.id = '$event_form_id' and event_form_list.event_id = events.id ");

        if ($event_form_details_q->num_rows() == 0) {
            echo "<br /><br /><br /><br />No such Event Registration form exists";
            die();
        }

        $event_form_details_row = $event_form_details_q->row();

        $event_form_data['event_id'] = $event_form_details_row->event_id;
        $event_form_data['max_participants'] = $event_form_details_row->max_participants;
        $event_form_data['extra_info_title'] = $event_form_details_row->extra_info_title;
        $event_form_data['title'] = $event_form_details_row->title;


        $this->load->helper(array('form', 'url'));


        $this->form_validation->set_rules('submitted', 'submitted', 'required');

        if ($event_form_data['max_participants'] > 1)
            $this->form_validation->set_rules('user_id_1', 'Participant 1', 'required'); //at leasst 1 participant

        if (strlen($event_form_details_row->extra_info_title) > 0)
            $this->form_validation->set_rules('extra_info', $event_form_details_row->extra_info_title, 'required');

        $this->load->view('common/header');

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Event_forms_register', $event_form_data);
        } else {
            $this->load->helper('htmlpurifier');

            $user_id_list = '';

            for ($i = 1; $i <= $event_form_data['max_participants']; $i++)
                if (strlen($this->input->post('user_id_' . $i)) > 0)
                    $user_id_list .= $this->input->post('user_id_' . $i) . ' ';

            if ($event_form_data['max_participants'] == 1)
                $user_id_list = $this->session->user_id;

            $form_data = array(
                'registered_by_user_id' => $this->session->user_id,
                'extra_info' => html_purify($this->input->post('extra_info')),
                'event_id' => $event_form_details_row->event_id,
                'extra_info' => html_purify($this->input->post('extra_info')),
                'user_id_list' => $user_id_list
            );

            $check_q = $this->db->query("select *  from event_form_data where event_id = '$event_form_details_row->event_id' "
                    . "and registered_by_user_id = '" . $this->session->user_id . "'");


            if ($check_q->num_rows() > 0) { // update
                $prev_row = $check_q->row();
                $prev_id = $prev_row->id;
                $this->db->update('event_form_data', $form_data, " id = '" . $prev_id . "'");
                $this->logger->insert('Updated event registration (' . $prev_id . ')');
            } else {
                $this->db->insert('event_form_data', $form_data);
                $this->logger->insert('Registered for event ' . $event_form_details_row->title);
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
