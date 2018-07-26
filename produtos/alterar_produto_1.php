<?php require_once('../cima_geral.php');
    require_once('banco_produtos.php');
    require_once("../logica_usuario.php"); verificaUsuario();
    require_once("../class/produto.php");
    require_once("../class/categoria.php");
?>
		<?php
        $produto = new Produto();
        $categoria = new Categoria();
        $categoria->id = $_POST['categoria_id'];
		
		$produto->id = $_POST["id"];
		$produto->setPreco($_POST["preco"]);
		$produto->nome = $_POST['nome'];
		$produto->descricao = $_POST['descricao'];
        $produto->categoria = $_POST['categoria_id'];
		if (array_key_exists('usado',$_POST)) {
            $produto->usado = "true";
        } else{
		    $produto->usado = "false";
        };

        if($produto->nome != '' && $produto->getPreco() != '') {
            if (alteraProduto($conexao, $produto)) {
                $_SESSION["success"] = "Produto $produto->nome alterado";
                header("Location: lista_produto.php");
            } else {
                $_SESSION["danger"] = "Produto $produto->nome não foi alterado";
                header("Location: alterar_produto.php");
            }
        }
        else {
            $_SESSION["danger"] = "Produto $produto->nome não foi alterado";
            header("Location: lista_produto.php");
        }
		?>
		?>
	</body>
</html>