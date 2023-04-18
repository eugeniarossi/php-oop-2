<?php

require_once __DIR__ . '/../Traits/Name.php';

/**
 * Product
 * Define the default Product
 */
class Product 
{
    use Name;

    /* PER MODIFICARE get_name NELLA TRAITS =
    creo un ALIAS al get_name all'interno della TRAIT
    use Name {
        Name::get_name as get_trait_name;
    }
    */

    private $id;
    private $description;
    private $category; // (cane/gatto/pesce...)
    private $price;
    private $image;
    
    /**
     * __construct
     *
     * @param  mixed int $_id
     * @param  mixed string $_name
     * @param  mixed string $_description
     * @param  mixed Category $_category
     * @param  mixed float $_price
     * @param  mixed string $_image
     * @return void
     */
    public function __construct($_id, $_name, $_description, $_category, $_price, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->set_price($_price);
        $this->image = $_image;
    }
    
    /**
     * get_id
     * 
     * @return int
     */
    public function get_id(){
        return $this->id;
    }
    
    /**
     * set_id
     *
     * @param  int $_id
     * @return void
     */
    public function set_id($_id){
        $this->id = $_id;
    }

    /*  SOSTITUITO DA TRAIT
    public function get_name(){
        return $this->name;
    }

    public function set_name($_name){
        $this->name = $_name;
    }

    se ridefinisco get_name e set_name sovrascrivo la TRAIT
*/ 

    public function get_description(){
        return $this->description;
    }

    public function set_description($_description){
        $this->description = $_description;
    }

    public function get_category(){
        return $this->category;
    }

    public function set_category($_category){
        $this->category = $_category;
    }

    public function get_price(){
        return $this->price;
    }
/*
    public function set_price($_price){
        $this->price = $_price;
    }*/

    // throw exception
    public function set_price($_price) {
        if (!is_float($_price)) {
            throw new Exception('Error: Price is not a float');
        }

        $this->price = $_price;
    }
    

    public function get_image(){
        return $this->image;
    }

    public function set_image($_image){
        $this->image = $_image;
    }

    /* MODIFICO L'ALIAS DEL TRAIT
    public function get_name(){
        return $this->get_trait_name;
    }
    */
}

?>