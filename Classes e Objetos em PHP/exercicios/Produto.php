<?php 

class Produto {
    private $nome;
    private $preco;

    function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_preco() {
        return $this->preco;
    }
}