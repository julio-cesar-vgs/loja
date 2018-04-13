<?php

require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");
verificaUsuario();
$categorias = listaCategorias($conexao);


// abaixo esta sendo criado um produto novo e as variaveis relacionado ao produto.
$produto = array("descricao" => "","nome" => "", "preco" => "","categoria" => "2");
$usado = "";
?>
    <h1>Formulário de cadastro</h1>
    <form action="adiciona-produto.php" method="post">

        <?php
        // inclusao de um formulario base, la dentro esta a configuraca tanto para criar novos produtos quanto para alterar produto
        include("produto-formulario-base.php") ?>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar
                    <span class="glyphicon glyphicon-floppy-disk"></span></button>

            </td>
        </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>