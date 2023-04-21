<?php

trait Name 
{
    private $productName;

    public function get_name(){
        return $this->productName;
    }
    public function set_name($_productName){
        $this->productName = $_productName;
    }
}   