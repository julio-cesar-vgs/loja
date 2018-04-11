<?php
function buscaUsuario($conexao, $email, $senha)
{


    // funcao para criptografar a senha.
    $senhaMD5 = md5($senha);

    // select para o aluno
    $query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMD5}'";
    echo $query;
    // faz o uso da query
    $resultado = mysqli_query($conexao, $query);

    // retornara o resultado de um usuario
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}