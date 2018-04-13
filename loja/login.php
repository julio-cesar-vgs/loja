<?php
require_once("banco-usuario.php");
require_once("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

/**
 * @author Julio
 * @criacao do $_SESSION, isso permitira o sistema verificar se o usuario esta logado ou nao.
 *
 * caso o sistema retorne sucess, o usuario esta logado.
 *
 * caso o sistema retorne danger, o usuario nao conseguiu logar.
 *
 *
 *@var $_SESSION verificara a sesssao.
 */
if ($usuario == null) {
    $_SESSION["danger"] = "Usuario ou Senha Invalido";
    header("Location: index.php");
} else {
    logaUsuario($usuario["email"]);
    $_SESSION["sucess"] = "Usuario Logado com sucesso";
    header("Location: index.php");
}
// para jogar as informacoes na tela
var_dump($usuario);