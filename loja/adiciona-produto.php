<?php

require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
verificaUsuario();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
// verifica se a chave esta ativa
if (array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}


//funcao para adicionar os produtos
if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
    <?php
    $_SESSION["sucess"] = "O produto $nome, $preco adicionado com sucesso!";
    header("Location: produto-formulario.php");
} else {
    $msg = mysqli_error($conexao);
    // caso estoure alguma excesso no projeto o programa retornara um danger para o usuario.
    $_SESSION["danger"] = "Houve um erro ao inserir o produto:  $nome de preço $preco, <br>Por gentileza fale com o admin do sistema !";
    header("Location: produto-formulario.php");
}
?>

<?php include("rodape.php"); ?>
