<?php

class ContaBancaria{
    private $titular;
    private $numero;
    private $saldo;

    function __construct($titular) {
        $this->titular = $titular;
    }

    function get_saldo() {
        return $this->saldo;
    }

    function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo '<strong style="color: green;">Valor de '.$valor.' sacado da conta com sucesso. </strong><br>';
            return $valor;
        } else {
            echo '<strong style="color: red;">Saldo insuficiente para sacar '.$valor.' reais</strong><br>';
        }
    }

    function depositar($valor) {
        echo '<strong style="color: green;">Valor de '.$valor.' depositado na conta com sucesso.</strong><br>';
        $this->saldo = $valor;
    }
}