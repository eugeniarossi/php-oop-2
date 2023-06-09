<?php

require_once __DIR__ .'/Product.php';

/**
 * Food
 */
class Food extends Product // ereditarietà / ha bisogno di un costruttore ma lo eredita dal padre / se ne definiamo uno sovrascrive quello del padre
{
    private $weight;
    private $ingredients;

    // throw exception
    public function set_weight($_weight){
        if(!is_numeric($_weight)) {
            throw new Exception('Error: Weight is not a number');
        }

        $this->weight = $_weight;
    }

    public function get_weight(){
        return $this->weight;
    }

    public function set_ingredients($_ingredients){
        $this->ingredients = $_ingredients;
    }

    public function get_ingredients(){
        return $this->ingredients;
    }
}

?>