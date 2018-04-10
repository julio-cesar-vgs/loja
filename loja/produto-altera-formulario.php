<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

    <h1>Alterando Produto</h1>
    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" value="<?= $produto['id'] ?>"/></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco" value="<?= $produto['preco'] ?>"/></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="usado" <?= $usado ?>value="true">Usado
                </td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php foreach ($categorias
                        as $categoria) :
                        $essaEhCategoria = $produto['categoria_id'] == $categoria['id'];

                        $selecao = $essaEhCategoria    ? "selected='selected'" : "";

                        ?>

                        <option value="<?= $categoria['id'] ?>" <?=$selecao?>>
                            <?= $categoria['nome'] ?>
                            <?php endforeach ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>