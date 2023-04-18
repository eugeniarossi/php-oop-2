<?php

require_once __DIR__ .'/Product.php';

class Food extends Product // ereditarietà / ha bisogno di un costruttore ma lo eredita dal padre / se ne definiamo uno sovrascrive quello del padre
{
    private $ingredients;

    public function set_ingredients($_ingredients){
        $this->ingredients = $_ingredients;
    }

    public function get_ingredients(){
        return $this->ingredients;
    }
}

?>