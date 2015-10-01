<?php

/*
 *  Created on :Sep 10, 2015, 10:48:43 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

    function index() {
        redirect(base_url() . 'Events/view_all');
    }

    function secure_hard() {
        if ($this->permissions->get_level() >= 2)
            return 1;
        $query = $this->db->get_where('events', array('id' => $this->input->get('event_id')));
        if ($query->num_rows() == 0) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "No such Event exists";
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
        $this->form_validation->set_rules('article_name', 'Event name', 'required');
        $this->form_validation->set_rules('publishing_date', 'Publishing Date', 'required');

        $this->load->view('common/header');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->get("event_id") != NULL) {
                $this->secure_hard();
                $query = $this->db->get_where('events', array('id' => $this->input->get('event_id')));
                if ($query->num_rows() == 0) {
                    echo "<br /><br /><br /><br />No such Event exists";
                    die();
                }
                $form_data = $query->row();
                $this->load->view('Event_form', $form_data);
            } else
                $this->load->view('Event_form');
        } else {

            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'article_name' => set_value('article_name'),
                'article' => set_value('article'),
                'publishing_date' => set_value('publishing_date'),
                'school' => set_value('school'),
                'short_desc' => set_value('short_desc'),
                'image_path' => set_value('image_path'),
                'club' => set_value('club'),
                'type' => set_value('type'),
            );
            if ($this->input->get('event_id') != "") { // update
                $this->secure_hard();
                unset($form_data['user_id']); // remains original
                $this->db->update('events', $form_data, " id = '" . $this->input->get('event_id') . "'");
                $this->logger->insert('Updated event ' . set_value('article_name') . ' (' . $this->input->get('event_id') . ')');
            } else {
                $this->db->insert('events', $form_data);
                $this->logger->insert('Created event ' . set_value('article_name'));
            }
            redirect(base_url() . 'Events/view_all');
        }

        $this->load->view('common/footer');
    }

    function view_all() {

        $this->load->view('common/header');
        $this->load->view('View_allevents');
        $this->load->view('common/footer');
    }

    function delete() {
        $this->secure_hard();

        $title_q = $this->db->query("select article_name from events where id = '" . $this->input->get('event_id') . "' ");
        $title_r = $title_q->row();
        $title = $title_r->article_name;

        $this->db->query("delete from events where id = '" . $this->input->get('event_id') . "'");

        $this->logger->insert('Deleted event ' . $title . ' (' . $this->input->get('event_id') . ')',TRUE);

        redirect(base_url() . 'Events/view_all');
    }

}
