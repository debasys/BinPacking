<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PlaceOrder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("items");
    }

    public function index() {
        
        //If page is submitted
        if (!empty($_POST)){
            require 'application/libraries/BinPacking.php';

            $items = $this->input->post("item");
            $selected_items = $this->items->getSelectedItems($items);
            $total_price = $this->items->getSelectedItemsPrice($items);

            //initialize BinPacking class
            $binPack = new BinPacking();
            $binPack->setItems($selected_items);

            if ($total_price <= 300) {

                $binPack->singlePack();
            } else {

                $binPack->pack();
            }

            $data["packages"] = $binPack->packages;
            
            $this->load->view("Package", $data);
        } else {
            
            //display items
            $data["items"] = $this->items->getAllItems();
            $this->load->view("PlaceOrder", $data);
        }
    }

}
