<?php include("logica_usuario.php"); verificaUsuario();?>
<?php include('cima.php')?>
<?php include('banco_produtos.php')?>
		<?php
		$preco = $_POST["preco"];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
        $categoria_id = $_POST['categoria_id'];
		if (array_key_exists('usado',$_POST)) {
            $usado = "true";
        } else{
		    $usado = "false";
        };
		if($nome != '' && $preco != '') {
            if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) {
                $_SESSION["success"] = "Produto $nome com o valor de $preco foi cadastrado.";
                header("Location: index.php");
            } else {
                $_SESSION["danger"] = "Produto $nome não foi cadastrado";
                header("Location: cadastrar_produto.php");
            }
        }
        else {
            $_SESSION["danger"] = "Produto $nome não foi cadastrado";
            header("Location: cadastrar_produto.php");
        }
		?>
	</body>
</html>