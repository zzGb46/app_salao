<?php
// echo '<pre>';
// define("missao", "http://localhost/login_projeto/cadastro/cadastro_usuario.php");

// define("mensagem", "http://localhost/login_projeto/mailer/formulario.php");

// define("agendamento", "http://localhost/login_projeto/agendamento.php");
$host ='';
$user = '';
$pass= '';
$db ='';

$pdo = new PDO("mysql:dbname=$db;host=$host", "$user", "$pass");
// $mysqli = new mysqli($host, $user, $pass, $db);


// function foi2(){
//     global $pdo;
//     $query = $pdo->query("SELECT * from tb_user");
//     $resultado = $query->fetchAll();
//     return $resultado;
// }
// var_export(foi2());

 
// function meu(){
//   global $pdo;
//   $query = $pdo->query("SELECT * FROM tb_user");
//   $resolucao = $query->fetch();
//   return $resolucao;
// }
// var_export( meu());



echo '</pre>';