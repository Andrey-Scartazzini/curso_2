<?php require_once("logica_usuario.php"); verificaUsuario();?>
<?php
	require_once('cima.php');
	require_once('banco_categoria.php');
$id = $_POST['id'];
removeCategoria($conexao, $id);
$_SESSION["success"] = "Categoria deletado com sucesso";
header("Location: lista_categoria.php");
die();
?>