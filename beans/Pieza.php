<?php
class Pieza{
    private $color;
    private $dama; // true dama o false ficha normal
    
    public function __construct($color) {
        $this->color = $color;
        $this->dama = false;
    }

     
    
}
?>