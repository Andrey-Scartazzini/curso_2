<?php
    require_once("../logica_usuario.php"); verificaUsuario();
    require_once("../cima_geral.php");
    require_once("../categorias/banco_categoria.php");
    require_once('../mostra_alerta.php');
	$categorias = listaCategorias($conexao);
	alert();
?>
<?php
    $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
    $usado = "";
?>
    <h1>Formulário de produto</h1>
		<div class="cantainer">
			<div class="principal">
				<form action="cadastrar_produto_1.php" method="post">
					<table class="table">
                        <?php include("produto_formulario_base.php")?>
						<tr>
							<td colspan="2"><button class="btn btn-primary" type="submit">cadastrar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>