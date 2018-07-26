<?php 
	require_once('../cima_geral.php');
	require_once('../categorias/banco_categoria.php');
	require_once('../logica_usuario.php');
    require_once('../mostra_alerta.php');
    alert();
?>
        <table class="table table-striped table-bordered">
            <tr>
                <td>Nome</td>
            </tr>
            <?php
                $categoria = listaCategorias($conexao);
                foreach ($categoria as $categorias) {
            ?>
            <tr>
                <td><?php echo $categorias['nome']?></td>
                <td>
                    <form action="alterar_categoria.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $categorias['id']?>">
                        <button class="btn btn-primary">alterar</button>
                    </form>
                </td>
                <td>
                    <form action="deletar_categoria.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $categorias['id']?>">
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
	</body>
</html>