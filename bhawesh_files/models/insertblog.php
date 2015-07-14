<?php
class Insertblog extends CI_Model{
    function insert($data){
        $this->db->insert("blog",$data);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

