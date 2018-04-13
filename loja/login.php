<?php
include("conecta.php");
include("banco-usuario.php");
include ("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

/**
 * @usuario se o usuario nao for encontrado ou nao for inserido nenhum o
 * programa vai retornar 0, impedindo que o usario seja logado no sistema.
 *
 */
if ($usuario == null) {
    header("Location: index.php?login=0");
} else {
    logaUsuario($usuario["email"]);
    header("Location: index.php?login=1");
}
// para jogar as informacoes na tela
var_dump($usuario);