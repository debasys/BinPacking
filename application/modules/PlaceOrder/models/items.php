<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Items
 *
 * @author debasys
 */
class Items extends CI_Model {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllItems(){
        $query = $this->db->get("items");
        return $query->result();
    }
    
    public function getSelectedItems($items){
        $this->db->select("*");
        $this->db->from("items");
        $this->db->where_in("id", $items);
        $this->db->order_by("weight");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getSelectedItemsPrice($items){
        
        $this->db->select_sum("price");
        $this->db->from("items");
        $this->db->where_in("id", $items);
        $query = $this->db->get();
        $rows = $query->row(0);
        return $rows->price;
    }
}
