<?php

class Blog_model extends CI_Model {

    function insert_into_db() {
        $user_id = $this->session->userdata('user_id');
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->db->query("INSERT INTO blog (title,description,user_id) VALUES('$title','".$this->db->escape_str($description)."',$user_id)");
    }

}
