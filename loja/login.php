<?php
include("conecta.php");
include("banco-usuario.php");

// funcao para buscar o usuario
$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario==null){
    header("Location: index.php?login=false");
    echo "Usuario nao Logado";
}else{
    header("Location: index.php?login=true");
    echo "Usuario Logado com sucesso";
}
// para jogar as informacoes na tela
var_dump($usuario);