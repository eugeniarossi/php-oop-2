<?php

class Product {
    private $name;
    private $price;

    protected function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    protected function get_name(){
        return $this->name;
    }

    protected function get_price(){
        return $this->price;
    }
}

?>