<?php
require 'config/config.php';
if(isset($_POST['usuario'], $_POST['senha'], $_POST['nome'])) {


    $user = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];



    $query = "INSERT INTO tb_user(usuario, senha, nome)
    values(
    :usuario,
    :senha,
    :nome);";

    $resultado = $pdo->prepare($query);
    $resultado->bindParam(':usuario', $user);
    $resultado->bindParam(':senha', $senha);
    $resultado->bindParam(':nome', $nome);
    $sucesso=$resultado->execute();


    if(!$sucesso){
      $errorInfo = $resultado->errorInfo();
      echo "Erro ao cadastrar: " . $errorInfo[2];
    } else {
        echo 'Usuario cadastrado com sucesso😎';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro</title>
  <link rel="stylesheet" href="styles.css"/>
</head>
<body>


  
  <div class="cadastro">
    <img src="img/logo-nova-black.svg" alt="Logo" class="illustration" />

    <h1>Crie sua conta</h1>
    <p>Preencha os campos abaixo para começar</p>

    <form method="POST">
      <input type="text" placeholder="Nome completo" name="nome" required />
      <input type="email" placeholder="E-mail" name="usuario" required />
      <input type="password" placeholder="Senha" name="senha" required />
      <button type="submit" class="primary">Cadastrar</button>
    </form>

    <div class="footer">
      <p>Já tem uma conta? <a href="index.php">Entrar</a></p>
    </div>
  </div>
</body>
</html>
