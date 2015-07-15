<?php

class Schools_db extends CI_Model{
    public function sobsc(){
        $query=$this->db->query("select * from schools where  sc_name='sobsc'");
        return $query->result();
        
    }
    public function sobt(){
        $query=$this->db->query("select * from schools where sc_name='sobt'");
        return $query->result();
        
    }
    public function soe(){
        $query=$this->db->query("select * from schools where sc_name='soe'");
        return $query->result();
        
    }
    public function sohss(){
        $query=$this->db->query("select * from schools where sc_name='sohss'");
        return $query->result();
        
    }
    public function soict(){
        $query=$this->db->query("select * from schools where sc_name='soict'");
        return $query->result();
        
    }
    public function soljg(){
        $query=$this->db->query("select * from schools where sc_name='soljg'");
        return $query->result();
        
    }
    public function som(){
        $query=$this->db->query("select * from schools where sc_name='som'");
        return $query->result();
        
    }
    public function sovsas(){
        $query=$this->db->query("select * from schools where sc_name='sovsas'");
        return $query->result();
        
    }
   
}

