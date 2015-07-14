<?php

class Vnb_db extends CI_Model{
    public function vnb_data(){
        $query=$this->db->query("select * from vnb");
        return $query->result();
        
}
}