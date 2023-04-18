<?php
    // definisco una Trait Size
    trait Size 
    {
        private $size;

        public function get_size(){
            return $this->size;
        }
    
        public function set_size($_size){
            $this->size = $_size;
        }
    
    }
    
?>