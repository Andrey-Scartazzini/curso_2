<?php

require_once('banco_usuario.php');
require_once('logica_usuario.php');
$senha = $_POST['senha'];
$email = $_POST['email'];
$usuario = buscaUsuario($conexao, $email, $senha);
if ($usuario == null){
    $_SESSION["danger"] = "Usuário ou senha inválida";
    header("Location: index.php");
}
else{
    logausuario($email);
    header("Location: index.php");
};
die();
?>