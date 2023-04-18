<?php 
require_once __DIR__ . '/../Traits/Name.php';

// usiamo la composizione - il prodotto per essere istanziato ha bisogno della categoria
class Category 
{
    use Name;

    private $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
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

    public function get_icon(){
        return $this->icon;
    }

    public function set_icon($_icon){
        $this->icon = $_icon;
    }

    public function get_category_info(){
        return ("{$this->icon} {$this->name}");
    }
}

?>