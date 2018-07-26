<?php
session_start();
function usuarioestalogado(){
    return isset($_SESSION["usuario_logado"]);
};
function verificaUsuario(){
    if(!usuarioestalogado()){
    $_SESSION["danger"] = "Você não esta logado";
        header("Location: ../index.php");
        die();
    };
};
function usuariologado(){
    return $_SESSION["usuario_logado"];
};
function logausuario($email){
    $_SESSION["usuario_logado"] = $email;
};

function logout(){
    session_destroy();
    session_start();
};
