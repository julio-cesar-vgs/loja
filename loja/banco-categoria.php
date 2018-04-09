<?php
function listaCategorias($conexao){
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao,$query);
    // lista todas as categorias
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}
