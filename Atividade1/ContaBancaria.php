<?php 
class ContaBancaria {
    private $titular;
    private $numero;
    private $saldo;

    function __construct($titular, $numero, $saldo) {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldo;

    }

    function getSaldo() {
        return $this->saldo;
    }
}










