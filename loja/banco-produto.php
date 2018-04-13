<?php
require_once ("conecta.php");
function listaProdutos($conexao)
{

    // funcao abaixo ira pegar os dados do produto + categorias fazendo um inner join.
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p 
                                               inner join categorias as c 
                                               on p.categoria_id = c.id order by p.nome");

    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}



/**
 *
 * funcao para inserir um produto na base de dados
 * pegando os seguintes parametros.
 *
 * Foi usado proteção de sqlInjection
 *
 * @param $conexao
 * @param $nome
 * @param $preco
 * @param $descricao
 * @param $categoria_id
 * @param $usado
 * @return bool|mysqli_result
 */
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)
{
    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $descricao);
    $usado = mysqli_real_escape_string($conexao, $usado);
    $preco = mysqli_real_escape_string($conexao, $preco);
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}',{$categoria_id},{$usado})";
    var_dump($query);
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id)
{
    $query = "delete from produtos where id = {$id}";

    return mysqli_query($conexao, $query);
}


function buscaProduto($conexao, $id)
{
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}


/**
 *
 * funcao para alterar produtos
 * @param $conexao
 * @param $id
 * @param $nome
 * @param $preco
 * @param $descricao
 * @param $categoria_id
 * @param $usado
 * @return array|null
 */
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)
{

    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $descricao);
    $usado = mysqli_real_escape_string($conexao, $usado);
    $preco = mysqli_real_escape_string($conexao, $preco);
    $query = "update  produtos set nome = '{$nome}', preco= {$preco}, descricao= '{$descricao}', categoria_id = {$categoria_id}, usado= {$usado} where id = {$id}";
    echo $query;
    return mysqli_query($conexao, $query);
}