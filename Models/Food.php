<?php
// richiedo la classe Product
require_once __DIR__ .'/Product.php';

/**
 * Food
 */
class Food extends Product 
{    
    private $weight;
    private $ingredients;

    
    /**
     * __construct
     *
     * @param  mixed $_name
     * @param  mixed $_price
     * @param  mixed $_weight
     * @param  mixed $_ingredients
     * @return void
     */
    public function __construct(string $_name, int $_price, int $_weight, string $_ingredients)
    {
        parent::__construct($_name, $_price);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
    
    /**
     * get_weight
     */
    public function get_weight(){
        return $this->weight;
    }
    
    /**
     * get_ingredients
     */
    public function get_ingredients(){
        return $this->ingredients;
    }
}

?>