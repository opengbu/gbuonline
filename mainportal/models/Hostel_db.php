<?php
/*
class Hostel_db extends CI_Model{
    function get_db(){
        $first = $_POST['first'];
        $query=$this->db->query("select * from warden where id='$first'");
        return $query->result();
    }
}