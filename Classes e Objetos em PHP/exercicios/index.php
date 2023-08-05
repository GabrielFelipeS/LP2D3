<?php
require("Carro.php");
require("Retangulo.php");
require("Pessoa.php");
require("ContaBancaria.php");
require("Produto.php");
require("Circulo.php");

echo "<strong>Exercicio 1: </strong><br>";
// Instanciando carro
$gol = new Carro("Volkswagen ","Gol", 2012);
$uno = new Carro("Fiat ","Uno", 2012);
$siena = new Carro("Fiat","Siena", 2012);
$celta = new Carro("General Motors", "Celta", 2012);


// Printando valores
echo "Marca: ".$gol->get_marca()."<br>Modelo: ".$gol->get_modelo()."<br>Ano: ".$gol->get_ano()."<br><br>";
echo "Marca: ".$uno->get_marca()."<br>Modelo: ".$uno->get_modelo()."<br>Ano: ".$uno->get_ano()."<br><br>";
echo "Marca: ".$siena->get_marca()."<br>Modelo: ".$siena->get_modelo()."<br>Ano: ".$siena->get_ano()."<br><br>";
echo "Marca: ".$celta->get_marca()."<br>Modelo: ".$celta->get_modelo()."<br>Ano: ".$celta->get_ano();

echo "<br><br>";
echo "<strong>Exercicio 2: </strong><br>";

$retangulo = new Retangulo(25, 4);
echo "Área do retangulo de largura ".$retangulo->get_largura()." e altura ".$retangulo->get_altura()." é igual a ".$retangulo->area()."<br>";
echo "Perametro do retangulo de largura ".$retangulo->get_largura()." e altura ".$retangulo->get_altura()." é igual a ".$retangulo->perimetro();


echo "<br><br>";
echo "<strong>Exercicio 3: </strong><br>";
$pessoa = new Pessoa("Gabriel", 20, "Desenvolvedor Java");
$pessoa->apresentar();

echo "<br><br>";
echo "<strong>Exercicio 4: </strong><br>";

$conta = new ContaBancaria("Gabriel");
$conta->depositar(150);
$conta->sacar(150);
$conta->depositar(100);
$conta->sacar(101);
echo "O saldo final é ".$conta->get_saldo();

echo "<br><br>";
echo "<strong>Exercicio 5: </strong><br>";

$produtos = [];
$produto = new Produto("A rainha vermelha", 60);
$produtos[] = $produto;

$produto = new Produto("Espada de vidro", 55);
$produtos[] = $produto;

$produto = new Produto("A prisão do rei", 80);
$produtos[] = $produto;

$produto = new Produto("A tempestade de guerra", 90);
$produtos[] = $produto;

$produto = new Produto("Trono Destuido", 50);
$produtos[] = $produto;

echo "Livros da bibliotex: <br>";
foreach($produtos as $produto) {
    echo "O livro ".$produto->get_nome()." custa ".$produto->get_preco()."reais.<br>";
}

echo "<br><br>";
echo "<strong>Exercicio 6: </strong><br>";

$circulo = new Circulo(10);
echo "A área o do circulo é ".$circulo->areaCirculo()."<br>";
echo "O circunferência do circulo é ".$circulo->circunferenciaCirculo();