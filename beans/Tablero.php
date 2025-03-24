<?php
require "..\UtilidadesES\UtilidadesES.php";

class Tablero {
    private $ancho;
    private $alto;
    private $tablero = []; 



    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;

        if ($this->comprobarDimensionesTablero($ancho, $alto)){
            $this->crearTablero();
        }
        else{}
        

    }


    public function getAlto(){
        return $this->alto;
    }
    public function getAncho(){
        return $this->ancho;
    }
    public function getTablero() {
        return $this->tablero;
    }


    private function comprobarDimensionesTablero($x, $y){

    }
    public function crearTablero(){
        for ($x = 1; $x <= $this->ancho; $x++){
            for ($y = 1; $y <= $this->alto; $y++){
                $this->tablero[$x][$y] = null;
            }
        }

    }
    public function mostrar()
    {
        echo "<br>";


        for ($x = 1; $x <= $this->ancho; $x++) {
            for ($y = 1; $y <= $this->alto; $y++) {
                echo $this->tablero[$x][$y];
            }
            echo "<br>";
        }

    }

    public function colocar_pieza($pieza_a_colocar)
    {
        $x = $pieza_a_colocar->getPosicionX();
        $y = $pieza_a_colocar->getPosicionY();
        $this->tablero[$x][$y] = $pieza_a_colocar;


        # Actualizar

        for ($x = 1; $x <= $this->ancho; $x++) {
            for ($y = 1; $y <= $this->alto; $y++) {
                if ($this->tablero[$x][$y] != null) {

                    # Cojo la posicion real del objeto
                    $posicionXDeLaPieza = $this->tablero[$x][$y]->getPosicionX();
                    $posicionYDeLaPieza = $this->tablero[$x][$y]->getPosicionY();

                    # Intercambio la posicion
                    $this->tablero[$posicionXDeLaPieza][$posicionYDeLaPieza] = $this->tablero[$x][$y];
                }
            }
        }
    }

}

?>