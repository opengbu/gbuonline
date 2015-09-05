<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clubs
 *
 * @author awasthi
 */
class clubs {
    //put your code here
    
    public function get($id) {
    $this->db->select('*');
    $query = $this->db->get('club');     
    return $query->result();
}
}
