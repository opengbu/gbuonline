<?php

class Blog_model extends CI_Model {

    function insert_into_db() {
        $user_id = $this->session->userdata('user_id');
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->db->query("INSERT INTO blog (title,description,user_id) VALUES('$title','".$this->db->escape_str($description)."',$user_id)");
    }
	
	function edit_into_db() {
        $user_id = $this->session->userdata('user_id');
        $title = $_POST['title'];
        $description = $_POST['description'];
		$bid = $_POST['bid'];
        $this->db->query("UPDATE blog SET title = '$title', description = '".$this->db->escape_str($description)."' ,user_id = '$user_id', status = '3' WHERE id = '$bid'; ");
    }

}
