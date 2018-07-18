<?php include("logica_usuario.php"); verificaUsuario();?>
<?php include('cima.php')?>
<?php include('banco_produtos.php');
require_once("class/produto.php");?>
		<?php
        $produto = new Produto();
		$produto->preco = $_POST["preco"];
		$produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->categoria_id = $_POST['categoria_id'];
		if (array_key_exists('usado',$_POST)) {
            $produto->usado = "true";
        } else{
            $produto->usado = "false";
        };
		if($produto->nome != '' && $produto->preco != '') {
            if (insereProduto($conexao, $produto)) {
                $_SESSION["success"] = "Produto $produto->nome com o valor de $produto->preco foi cadastrado.";
                header("Location: index.php");
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