<?php 

class Produto {
    private $nome;
    private $preco;

    function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getPreco() {
        return $this->preco;
    }
}