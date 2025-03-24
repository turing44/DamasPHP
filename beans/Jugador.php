<?php
class Jugador{
    private $color;
    private $nombre;
    public function __construct($color, $nombre){
        $this->color = $color;
        $this->nombre = $nombre;


    }

    public function getNombre(){return $this->nombre;}
    public function getColor() {return $this->color;} 

}

?>