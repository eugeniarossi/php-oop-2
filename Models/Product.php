<?php

/**
 * Product
 */
class Product {
    private $name;
    private $price;
    
    /**
     * __construct
     *
     * @param  mixed $_name
     * @param  mixed $_price
     * @return void
     */
    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
    
    /**
     * get_name
     */
    public function get_name(){
        return $this->name;
    }
    
    /**
     * get_price
     */
    public function get_price(){
        return $this->price;
    }
}

?>