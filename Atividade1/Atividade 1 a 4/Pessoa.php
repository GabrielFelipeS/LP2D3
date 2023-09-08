<?php
class Pessoa {
    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    public function apresentar() {
        return "Olá, meu nome é ".$this->nome.", tenho ".$this->idade." anos e sou ".$this->profissao.".";
    }
}