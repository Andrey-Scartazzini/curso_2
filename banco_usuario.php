<?php include('conecta.php')?>
<?php
	function buscaUsuario($conexao, $email, $senha){
        $senhamd5 = md5($senha);
        $email= mysqli_real_escape_string($conexao, $email);
        $query = "select * from usuario where email='$email' and senha='$senhamd5'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
	};
?>