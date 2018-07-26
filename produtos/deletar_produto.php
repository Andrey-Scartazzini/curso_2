<?php
    require_once("../logica_usuario.php"); verificaUsuario();
	require_once('../cima_geral.php');
	require_once('banco_produtos.php');
    require_once("../class/produto.php");
?>
<?php
    $produto = new Produto();
    $produto->id = $_POST['id'];
    removeProduto($conexao, $produto);
    $_SESSION["success"] = "Produto deletado com sucesso";
    header("Location: lista_produto.php");
    die();
?>