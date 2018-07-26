<?php require_once("../logica_usuario.php"); verificaUsuario();?>
<?php require_once("../cima_geral.php");?>
<?php require_once("banco_categoria.php");?>
<?php
    $id = $_POST["id"];
    $categorias = BuscaCategoria($conexao, $id);
?>
    <h1>Formulário de categoria</h1>
		<div class="cantainer">
			<div class="principal">
				<form action="alterar_categoria_1.php" method="post">
					<table class="table">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <tr>
                            <td>Nome</td>
                            <td><input class="form-control" type="text" name="nome" value="<?= $categorias['nome'] ?>"></td>
                        </tr>
						<tr>
							<td colspan="2"><button class="btn btn-primary" type="submit">Alterar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>