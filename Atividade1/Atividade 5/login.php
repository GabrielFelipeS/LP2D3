<?php 
include 'cabecalho.php';
include 'inc/connection.php';
require("Usuario.php");
require("UsuarioDAO.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuarioDao = new UsuarioDAO($conn);
  if($usuarioDao->validar($_POST['email'], $_POST['senha'])) {

//$usuario = new Usuario($_POST['email'], $_POST['senha']);
    header("Location: cafe.html");
  } else {
    echo '<section class="container-admin-banner" style="color: white; font-weight: bold;">
    Usuario não encontrado!
</section>';
  }
 
  
}
  
?>

<link rel="stylesheet" href="css/glow-on-hover.css">
<title>Bibliotex - Login</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img class="reverse" src="img/livro_icon.png" class="logo-admin" alt="logo-serenatto" style=" filter: invert(1); height: 200px;">
    <h1>Login Bibliotex</h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <section class="container-form">
  <form action="#" method="post">

    <label for="email" > E-mail</label>
    <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>

    <label for="senha">Senha</label>
    <input  type="senha" id="senha" name="senha" placeholder="Digite a sua senha" required>

    <button class="glow-on-hover">Entrar </button>
  </form>

  </section>
</main>
</body>
</html>