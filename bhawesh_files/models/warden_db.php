<?php

class Warden_db extends CI_Model{
    function get_db()
    {
        $query=$this->db->query("select * from warden");
        return $query->result();
    }
}
