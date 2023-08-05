<?php 
class Circulo {
    private $raio;

    function __construct($raio) {
        $this->raio = $raio;
    }

    function areaCirculo() {
        return 3.14 * (pow($this->raio, 2));
    }

    function circunferenciaCirculo() {
        return 2 * 3.14 * $this->raio;
    }
}