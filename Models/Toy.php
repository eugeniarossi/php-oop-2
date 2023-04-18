<?php

require_once __DIR__ .'/Product.php';

/**
 * Toy
 */
class Toy extends Product 
{
    private $features;
    private $size;

    public function set_features($_features){
        $this->features = $_features;
    }

    public function get_features(){
        return $this->features;
    }

    public function set_size($_size){
        $this->size = $_size;
    }

    public function get_size(){
        return $this->size;
    }
}

?>