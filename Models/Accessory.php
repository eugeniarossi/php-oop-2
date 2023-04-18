<?php

require_once __DIR__ . '/Product.php';
// importo la Trait Size
require_once __DIR__ . '/../Traits/Size.php';

/**
 * Accessory
 */
class Accessory extends Product 
{
    // uso la Trait Size
    use Size;
    private $materials;

    public function set_materials($_materials){
        $this->materials = $_materials;
    }

    public function get_materials(){
        return $this->materials;
    }
}

?>