<?php

require_once __DIR__ .'/Product.php';

/**
 * Accessory
 */
class Accessory extends Product 
{
    private $materials;
    private $size;

    public function set_materials($_materials){
        $this->materials = $_materials;
    }

    public function get_materials(){
        return $this->materials;
    }

    public function set_size($_size){
        $this->size = $_size;
    }

    public function get_size(){
        return $this->size;
    }
}

?>