<?php
    include("../logica_usuario.php"); verificaUsuario();
    include('../cima_geral.php');
    include('banco_produtos.php');
    require_once("../class/produto.php");
    require_once("../class/categoria.php");
?>
		<?php
        $produto = new Produto();
        $categoria = new Categoria();
        $categoria = $_POST['categoria_id'];
		$produto->setPreco($_POST["preco"]);
		$produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->categoria = $categoria;
		if (array_key_exists('usado',$_POST)) {
            $produto->usado = "true";
        } else{
            $produto->usado = "false";
        };
		if($produto->nome != '' && $produto->getPreco() != '') {
            if (insereProduto($conexao, $produto)) {
                $_SESSION["success"] = "Produto $produto->nome com o valor de ".$produto->getPreco()." foi cadastrado.";
                header("Location: ../index.php");
            } else {
                $_SESSION["danger"] = "Produto $produto->nome não foi cadastrado";
                header("Location: cadastrar_produto.php");
            }
        }
        else {
            $_SESSION["danger"] = "Produto $produto->nome não foi cadastrado";
            header("Location: cadastrar_produto.php");
        }
		?>
	</body>
</html>