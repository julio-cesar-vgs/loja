<?php
session_start();
/**
 * Funcao para ajustar as mensagens do sistema, ela pegara o formato das mensagens
 * e passara para o usuario.
 *
 * caso o parametro seja danger o sistema informara em vermelho.
 *
 * caso o parametro seja sucess o sistema informara em verde.
 *
 *
 * @param $tipo
 */
function mostraAlertas($tipo)
{
    if (isset($_SESSION[$tipo])) {
        ?>

        <p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo] ?></p>

        <?php
        unset($_SESSION[$tipo]);
    }
}
