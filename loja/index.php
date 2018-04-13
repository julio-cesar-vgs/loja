<?php include("cabecalho.php");
include("logica-usuario.php");
?>



<h1>Bem vindo!</h1>


<?php if (usuarioEstaLogado()) { ?>
    <a class="alert-success">Voce esta Logado como <?= usuarioLogado() ?></a></p>
    <p><a class="btn btn-info" href="logout.php">Deslogar
            <span class="glyphicon glyphicon-log-out"></span>
        </a></p>

<?php } else { ?>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" class="form-control" name="senha"></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary">Login
                        <span class="glyphicon glyphicon-log-in"></span>
                    </button>

                </td>
            </tr>
    </form>
<?php } ?>
</table>
<?php include("rodape.php"); ?>
