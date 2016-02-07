<?php

/*
 * Created on : Feb 7, 2016, 8:48:52 AM
 * Author     :Varun Garg <varun.10@live.com>

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

class Mega_events extends CI_Controller {

    function index() {
        redirect(base_url() . 'Mega_events/view_all');
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
        $this->form_validation->set_rules('name', 'Mega event\'s name', 'required');
        $this->form_validation->set_rules('duration', 'Mega event\'s duration', 'required');
        $this->form_validation->set_rules('default_controller', 'Mega event\'s Default Controller', 'required');


        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("mega_event_id") != NULL) {

                $query = $this->db->get_where('mega_events', array('id' => $this->input->get('mega_event_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Mega event exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Mega_event_form', $form_data);
            } else
                $this->load->view('Mega_event_form');
        } else {
            $this->load->helper('htmlpurifier');
            $form_data = array(
                'name' => html_purify($this->input->post('name')),
                'duration' => html_purify($this->input->post('duration')),
                'default_controller' => html_purify($this->input->post('default_controller'))
            );
            if ($this->input->get('mega_event_id') != "") { // update
                $this->db->update('mega_events', $form_data, " id = '" . $this->input->get('mega_event_id') . "'");
                $this->logger->insert('Updated club ' . html_purify($this->input->post('c_name')) . ' (' . $this->input->get('mega_event_id') . ')');
            } else {
                $this->db->insert('mega_events', $form_data);
                $this->logger->insert('Created club ' . html_purify($this->input->post('c_name')));
            }
            redirect(base_url() . 'Mega_events/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('Mega_events_all');
        $this->load->view('common/footer');
    }

    function delete() {
        $title_q = $this->db->query("select name from mega_events where id = '" . $this->input->get('mega_event_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->name;

        $this->db->query("delete from mega_events where id = '" . $this->input->get('mega_event_id') . "'");

        $this->logger->insert('Deleted mega event ' . $title . ' (' . $this->input->get('mega_event_id') . ')', TRUE);

        redirect(base_url() . 'Mega_events/view_all');
    }
}
