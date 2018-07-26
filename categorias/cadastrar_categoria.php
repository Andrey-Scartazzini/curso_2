<?php require_once("../logica_usuario.php"); verificaUsuario();
require_once("../cima_geral.php");
require_once('../mostra_alerta.php');
alert();
?>
    <h1>Formulário de categoria</h1>
		<div class="cantainer">
			<div class="principal">
				<form action="cadastrar_categoria_1.php" method="post">
					<table class="table">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <tr>
                            <td>Nome</td>
                            <td><input class="form-control" type="text" name="nome"></td>
                        </tr>
						<tr>
							<td colspan="2"><button class="btn btn-primary" type="submit">cadastrar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>