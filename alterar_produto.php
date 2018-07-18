<?php require_once("cima.php")?>
<?php require_once("banco_categoria.php"); $categorias = listaCategorias($conexao);?>
<?php require_once("banco_produtos.php")?>
<?php require_once("logica_usuario.php"); verificaUsuario();?>
<?
require_once('mostra_alerta.php');
alert();
?>
<?php
    $id = $_POST["id"];
    $produto = BuscaProduto($conexao, $id);
    $usado = $produto['usado'] ? "checked='checked'" : "";
?>
<h1>Alterando produto</h1>
		<div class="cantainer">
			<div class="principal">
				<form action="alterar_produto_1.php" method="post">
					<table class="table">
                        <?php require_once("produto_formulario_base.php")?>
						<tr>
							<td colspan="2"><button class="btn btn-primary" type="submit">Alterar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>