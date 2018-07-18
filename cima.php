<?php error_reporting(E_ALL ^ E_NOTICE) ?>
<?php include('mostra_alerta.php')?>
<?php mostraalerta("success"); mostraalerta("danger");?>
<html>
<head>
	<meta charset='utf-8'>
	<title>loja</title>
	<link type="text/css" href='css/bootstrap.css' rel='stylesheet'>
	<link type="text/css" href='css/loja.css' rel='stylesheet'>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand"	href="index.php">Lojinha</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="cadastrar_produto.php">Inserir produtos</a></li>
					<li><a href="cadastrar_categoria.php">Inserir Categoria</a></li>
					<li><a href="lista_produto.php">Lista dos produtos</a></li>
					<li><a href="lista_categoria.php">Lista das categorias</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
    </div>
    <div class="container">
        <div class="principal">
