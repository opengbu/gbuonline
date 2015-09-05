<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of club
 *
 * @author awasthi
 */
class club {
    //put your code here
    //Null value is not considered. There may appear few bug.
    public function info($clubid){
    $this->db->select('title');    
    $this->db->from('cars');
    $this->db->where('car_make', $car);
    return $this->db->get();

}

}
