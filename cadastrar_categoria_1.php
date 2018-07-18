<?php include("logica_usuario.php"); verificaUsuario();?>
<?php include('cima.php')?>
<?php include('banco_categoria.php')?>
		<?php
		$nome = $_POST['nome'];
        if($nome != '') {
            if (insereCategoria($conexao, $nome)) {
                $_SESSION["success"] = "Categoria $nome foi cadastrado";
                header("Location: index.php");
            }
            else {
                $_SESSION["danger"] = "Categoria $nome não foi cadastrado";
                header("Location: cadastrar_categoria.php");
            }
        }
        else {
            $_SESSION["danger"] = "Categoria $nome não foi cadastrado";
            header("Location: cadastrar_categoria.php");
        }
        ?>
		?>
	</body>
</html>