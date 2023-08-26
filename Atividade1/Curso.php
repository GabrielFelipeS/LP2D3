<?php
class Curso {
    private $nome;
    private $link;

    function __construct($nome, $link) {
        $this->nome = $nome;
        $this->link = $link;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getLink() {
        return $this->link;
    }
}