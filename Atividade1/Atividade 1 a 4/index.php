<?php 
    require("Pessoa.php");
    require("ContaBancaria.php");
    require("Curso.php");
    require("Produto.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 1</title>
</head>
<body>
    <header>
        <h1>Atividade 1</h1>
    </header>
   <section>
   <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);

        $pessoa = new Pessoa($_POST['nome'], $_POST['idade'], $_POST['profissao']);

        echo $pessoa->apresentar();

        $conta = new ContaBancaria($pessoa, rand(0, 1000), rand(-1000, 1000));

        if($conta->getSaldo() >= 0) {
            echo "<br>Seu saldo da conta bancária é de ".numfmt_format_currency($padrao, $conta->getSaldo(), "BRL");
        } else {
            echo "<br>Seu saldo da conta bancára negativa: ".numfmt_format_currency($padrao, $conta->getSaldo(), "BRL");
        }

        $listaDeCursos[] = new Curso("FIAP","https://on.fiap.com.br/local/nanocourses/index.php");

        $listaDeCursos[] = new Curso('CS50','https://pll.harvard.edu/course/cs50-introduction-computer-science');

        $listaDeCursos[] = new Curso('Computer Science', "https://pt.khanacademy.org/computing/computer-science");

        $cursos = "<br><br><strong>Cursos:</strong> <br> <ul>";

        foreach($listaDeCursos as $curso) {
            $cursos .= "<li>". $curso->getNome() . " - " . $curso->getLink() . "</li>";
        }
        $cursos .= '</ul>';
        echo $cursos;

        if($conta->getSaldo() >= 0) {
            $listaDeProdutos[] = new Produto('Rainha vemelha', 60);
            $listaDeProdutos[] = new Produto('A prisao do rei', 75);
            $listaDeProdutos[] = new Produto('A biblioteca da meia noite', 50);

            $produtos = "<br><br><strong>Produtos com desconto</strong> <br><ul>";

            foreach($listaDeProdutos as $produto) {
                $produtos .= "<li>". $produto->getNome() ." - ". numfmt_format_currency($padrao, $produto->getPreco(), "BRL"). "</li>";
            }
            $produtos .= "</ul>";
            echo $produtos;


        }

    ?>


    <?php  } else {?>
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome"> 

            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade">

            <label for="profissao">Profissão:</label>
            <input type="number" name="profissao" id="profissao">
            
            <input type="submit" value="Enviar">
        </form>
    <?php }?>
    </section>

</body>
</html>