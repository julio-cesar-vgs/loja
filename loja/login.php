<?php
require_once("banco-usuario.php");
require_once("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);


if ($usuario == null) {
    $_SESSION["danger"] = "Usuario ou Senha Invalido";
    header("Location: index.php");
} else {
    logaUsuario($usuario["email"]);
    $_SESSION["sucess"] = "Usuario Logado com sucesso";
    header("Location: index.php");
}
// para jogar as informacoes na tela
//var_dump($usuario);