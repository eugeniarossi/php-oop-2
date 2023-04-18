<?php

require_once __DIR__ . '/Product.php';
// importo la Trait Size
require_once __DIR__ . '/../Traits/Size.php';

/**
 * Toy
 */
class Toy extends Product 
{
    // uso la Trait Size
    use Size;

    private $features;

    public function set_features($_features){
        $this->features = $_features;
    }

    public function get_features(){
        return $this->features;
    }
}

?>