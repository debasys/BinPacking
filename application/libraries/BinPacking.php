<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BinPacking
 *
 * @author debasys
 */

class Item{
    public $weight;
    public $price;
    public $name;
    
    /*
     * Constructor for initialize item's attribute
     * 
     */
    public function __construct($price, $weight, $name) {
        $this->price = $price;
        $this->weight = $weight;
        $this->name = $name;
    }

    /*
     * getter method for price
     */
    public function getPrice(){
        return $this->price;
    }

    /*
     * getter method for weight
     */
    public function getWeight(){
        return $this->weight;
    }
}

class Package{
    
    public $total_price;
    public $items = array();
    
    /*
     * construcor method for initialize items
     */
    public function __construct($item = array()) {
        if(count($item))
            $this->putItem($item);
    }

    /*
     * This method is for keeping an item into package
     */
    public function putItem($item){
        $this->items[] = $item;
    }
    
    /*
     * This method returns total price of items from a package
     */
    public function getPackageTotalPrice(){
        $total = 0;
        foreach($this->items as $item){
            $total = $total + $item->price;
        }
        return $total;
    }
    
    /*
     * This method returns list of items from a package
     */
    public function getItemList(){
        $items_arr = '';
        foreach($this->items as $item){
            $items_arr[] = $item->name;
        }
        return implode(", ", $items_arr);
    }
    
    /*
     * This method returns total weight of a package
     */
    public function getTotalWeight(){
        $total = 0;
        foreach($this->items as $item){
            $total = $total + $item->weight;
        }
        return $total;
    }
    
    /*
     * This method returns price of a package
     */
    public function getCurierPrice(){
        $weight = $this->getTotalWeight();
        if($weight > 0 and $weight < 200){
            $price = "USD 5";
        }
        elseif($weight >= 200 and $weight < 500){
            $price = "USD 10";
        }
        elseif($weight >= 500 and $weight < 1000){
            $price = "USD 15";
        }
        elseif($weight >= 1000 and $weight < 5000){
            $price = "USD 20";
        }
        
        return $price;
    }
    
}

class BinPacking {
    
    //put your code here
    public $items = array();
    public $packages = array();

    /*
     * This method sets items from database
     */
    public function setItems($items){
        foreach($items as $item){
            $this->items[] = new Item($item->price, $item->weight, $item->name);
        }
    }
    
    /*
     * this method is for single packing where total price less than $300
     */
    public function singlePack(){
       
        $first = new Package;
        foreach($this->items as $item){
            $first->putItem($item);
        }
        
        $this->packages[] = $first;
    }
    
    /*
     * This method does the actual packaging with BinPacking algorithm
     */
    public function pack(){
        $first = new Package;
        $second = new Package;
        
        foreach($this->items as $item){
            $packed = false;
            
            if($first->getTotalWeight() <= $second->getTotalWeight()){
                
                if(($first->getPackageTotalPrice() + $item->price) >= 300){
                    $this->packages[] = $first;
                    $first = new Package;
                }
                $first->putItem($item);
            }
            else{
                if(($second->getPackageTotalPrice() + $item->price) >= 300){
                    $this->packages[] = $second;
                    $second = new Package;
                }
                $second->putItem($item);
            }
        }
        
        $this->packages[] = $first;
        $this->packages[] = $second;
    }
    
}

//$items = array(
//    new Item(40,10, "Item 6"),
//    new Item(200,10, "Item 7"),
//    new Item(100,20, "Item 2"),
//    new Item(10,200, "Item 1"),
//    new Item(30,200, "Item 3"),
//    new Item(20,500, "Item 4"),
//    
//   
//);
//$items = array(
//    new Item(20,500, "Item 4"),
//    new Item(30,200, "Item 3"),
//    new Item(10,200, "Item 1"),
//    new Item(100,20, "Item 2"),
//    new Item(200,10, "Item 7"),
//    new Item(40,10, "Item 6")
//);

