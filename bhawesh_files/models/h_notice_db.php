<?php

class H_notice_db extends CI_Model{
    function get_db(){
        $query=$this->db->query("select * from h_notice");
        return $query->result();
    }
}
