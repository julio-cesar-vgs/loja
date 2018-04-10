<?php

function listaProdutos($conexao)
{

    // funcao abaixo ira pegar os dados do produto + categorias fazendo um inner join.
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p 
                                               inner join categorias as c 
                                               on p.categoria_id = c.id");

    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}


// funcao para inserir um produto na base de dados
// pegando os seguintes parametros, conexao, nome, preco, descricao, categoria_id
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)
{
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}',{$categoria_id},{$usado})";
    echo $query;
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id)
{
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}
