<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
<<<<<<< HEAD
include ("logica-usuario.php");
include ("mostra-alerta.php");
?>

=======
?>

<?php if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

>>>>>>> parent of 6167bde... Capitulo 06 -  Refatoração, escopo de flash e controle de erro

<table class="table table-striped table-bordered" id="mytable">
    <thead>
    <tr>
        <th align="center">
            Nome
        </th>
        <th >
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

        <tr align="center">
            <td><?= $produto['nome'] ?></td>
            <td>R$ <?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0, 40) ?></td>
            <td>


                <?= $produto['usado'] == 1 ? "Usado" : "Novo" ?>
            </td>
            <td><?= $produto['categoria_nome'] ?></td>
            <td>
                <a class="btn btn-info btn-lg" href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">
                    <span class="glyphicon glyphicon-pencil"></span></a>
            </td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <button class="btn btn-danger btn-lg">
                        <span class="glyphicon glyphicon-trash"></span></button>
                </form>
            </td>
        </tr>
    <?php
    endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
