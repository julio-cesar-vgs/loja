<?php include("cabecalho.php"); ?>
<?php if (isset($_GET["login"]) && $_GET["login"] == true) { ?>
    <p class="alert-success">Logado com Sucesso</p>
<?php } ?>
<?php if (isset($_GET["login"]) && $_GET["login"] == false) { ?>
    <p class="alert-danger">Usuario ou Senha invalido</p>
<?php }?>
<h1>Bem vindo!</h1>
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
</table>
<?php include("rodape.php"); ?>
