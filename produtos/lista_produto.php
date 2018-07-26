<?php 
	require_once('../cima_geral.php');
	require_once('../logica_usuario.php');
	require_once('banco_produtos.php');
	require_once('../mostra_alerta.php');
	alert();
?>
        <table class="table table-striped table-bordered">
            <tr>
                <td>Nome</td>
                <td>Preço</td>
                <td>"Preço"</td>
                <td>Descrição</td>
                <td>Categoria</td>
                <td>Usado</td>
            </tr>
            <?php
                $produtos = listaProduto($conexao);
                foreach ($produtos as $produto) {
            ?>
            <tr>
                <td><?php echo $produto->nome?></td>
                <td><?php echo $produto->getPreco()?></td>
                <td><?php echo $produto->precoComDesconto()?></td>
                <td><?php echo substr($produto->descricao, 0, 40)?></td>
                <td><?php echo $produto->categoria->nome?></td>
                <td><?php if($produto->usado == true ){echo "sim"; } else{echo "não";};?></td>
                <td>
                    <form action="alterar_produto.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $produto->id?>">
                        <button class="btn btn-primary">alterar</button>
                    </form>
                </td>
                <td>
                    <form action="deletar_produto.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $produto->id?>">
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