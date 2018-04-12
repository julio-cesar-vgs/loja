<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include ("logica-usuario.php");
?>

<?php
//procedimento abaixo ira verificar se o usuario esta logado ou nao, caso esteja sera retornado um sucess
if (isset($_SESSION["sucess"])) { ?>
    <p class="alert-success"><?= $_SESSION["sucess"] ?></p>
    <?php
    unset($_SESSION["sucess"]);
} ?>


<table class="table table-striped table-bordered" id="mytable">
    <thead>
    <tr>
        <th align="center">
            Nome
        </th>
        <th>
            Valor
        </th>
        <th align="center">
            Descrição
        </th>
        <th>
            Item
        </th>
        <th>
            Categoria
        </th>
        <th>
            Alterar Produto
        </th>
        <th>
            Remover Produto
        </th>
    </tr>
    </thead>
    <?php
    $produtos = listaProdutos($conexao);


    foreach ($produtos as $produto) :
        ?>

        <tr>
            <td><?= $produto['nome'] ?></td>
            <td>R$ <?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0, 40) ?></td>
            <td class="a">


                <?= $produto['usado'] == 1 ? "Usado" : "Novo" ?>
            </td>
            <td><?= $produto['categoria_nome'] ?></td>
            <td>
                <a class="btn btn-info " href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">
                    <span class="glyphicon glyphicon-pencil"></span></a>
            </td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span></button>
                </form>
            </td>
        </tr>
    <?php
    endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
