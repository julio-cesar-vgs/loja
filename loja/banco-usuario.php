<?php
require_once ("conecta.php");
/**
 *
 * funcao para buscar usuario na base de dados.
 *
 * @param $conexao
 * @param $email
 * @param $senha
 * @return array|null
 */
function buscaUsuario($conexao, $email, $senha)
{
    // funcao para criptografar a senha.
    $senhaMD5 = md5($senha);

    // feito a "protecao" para sql injection
    $email = mysqli_real_escape_string($conexao, $email);
    $senhaMD5 = mysqli_real_escape_string($conexao, $senhaMD5);
    // select para o aluno
    $query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMD5}'";

    // faz o uso da query
    $resultado = mysqli_query($conexao, $query);

    // retornara o resultado de um usuario
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}