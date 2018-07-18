<?php require_once('cima.php')?>
<?php require_once('logica_usuario.php')?>
<?php require_once('mostra_alerta.php')?>
<h1>Seja bem-vindo.</h1>
<?php
alert();
if (usuarioestalogado()){
    echo "<p class='alert-success'>Voce esta logado. <a href='logout.php'>Deslogar</a></p>";
}
else {
    echo '
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input calss="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input calss="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="bnt bnt-primary">Login</button></td>
            </tr>
        </table>
    </form>';
};
?>
	</body>
</html>