<?php require_once("logica_usuario.php"); verificaUsuario();?>
<?php
	require_once('cima.php');
	require_once('banco_produtos.php');
	require_once('logica_usuario.php');
    require_once("class/produto.php");
$produto = new Produto();
$produto->id = $_POST['id'];
removeProduto($conexao, $produto);
$_SESSION["success"] = "Produto deletado com sucesso";
header("Location: lista_produto.php");
die();
?>