<?php include("cabecalho.php");
<<<<<<< HEAD
include("logica-usuario.php");
include ("mostra-alerta.php");
?>

=======
include ("logica-usuario.php");?>
>>>>>>> parent of 6167bde... Capitulo 06 -  Refatoração, escopo de flash e controle de erro

<?php if (isset($_GET["logout"]) && $_GET["logout"] == true) { ?>
    <p class="alert-success">Deslogado com Sucesso</p>
<?php } ?>
<?php if (isset($_GET["login"]) && $_GET["login"] == true) { ?>
    <p class="alert-success">Logado com Sucesso</p>
<?php } ?>
<?php if (isset($_GET["login"]) && $_GET["login"] == false) { ?>
    <p class="alert-danger">Usuario ou Senha invalido</p>
<?php } ?>

<h1>Bem vindo!</h1>


<?php if (usuarioEstaLogado()) { ?>
    <a class="alert-success">Voce esta Logado como <?= usuarioLogado() ?></a></p>
    <p><a class="btn btn-info btn-lg" href="logout.php">Deslogar
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
                    <button class="btn btn-primary">Login</button>
                </td>
            </tr>
    </form>
<?php } ?>
</table>
<?php include("rodape.php"); ?>
