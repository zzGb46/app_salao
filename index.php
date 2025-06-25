<?php 
require 'config/config.php';
session_start();

if(isset($_GET['usuario'], $_GET['senha'])){

$usuario = $_GET['usuario'];
$senha = $_GET['senha'];


require 'app/model/model.php';

if(verificarUsuario($usuario, $senha)){
$_SESSION['usuario']=$usuario;
$_SESSION['senha'] = $senha;
header('Location:perfil.php');
}else{
   echo 'erro login😭';
}
}



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>

  <div class="login">


    
    <img src="img/girassol-app.svg" alt="girassol-app" class="girassol-app">
    <img src="img/logo-nova-black.svg" alt="Logo" class="illustration" />

    <h1>Entrar</h1>


    <form action="" method="get">
      <input type="email" placeholder="E-mail" name="usuario" required />
      <input type="password" placeholder="Senha" name="senha" required />
      <button type="submit" class="primary">Conecte-se</button>
    </form>

    <a href="redefinir.php" class="forgot-password">Esqueceu a senha?</a>

    <div class="inscreva">

      <p>Não tem conta?</p><a href="cadastro.php" class="a-inscreva"> Inscreva-se </a>
    </div>
  </div>
</body>

</html>