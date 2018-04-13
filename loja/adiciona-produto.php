<?php

require_once("cabecalho.php");
require_once ("banco-produto.php");
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
    <p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">O produto não foi adicionado: <?= $nome; E_ERROR?> <br>Ocorreu o seguinte erro: <?= $msg ?></p>
    <?php
}
?>

<?php include("rodape.php"); ?>
