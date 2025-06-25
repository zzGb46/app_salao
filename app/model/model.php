<?php
require('config/config.php');
// $query = "SELECT * from tb_user where usuario  = '$usuario' and senha = '$senha'";
//  $resultado = mysqli_query($mysqli, $query);
//  $total = mysqli_num_rows($resultado);


function verificarUsuario($usuario, $senha){
    global $pdo;
    $query = "SELECT * FROM tb_user where usuario = :usuario and senha = :senha";
    $resultado = $pdo->prepare($query);
    $resultado->bindParam(':usuario', $usuario);
    $resultado->bindParam(':senha', $senha);
    $resultado->execute();

    return $resultado->rowCount() ===1;
}
