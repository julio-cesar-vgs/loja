<?php
function usuarioEstaLogado()
{
    return isset($_COOKIE["usuario_logado"]);
}


/**
 * Funcao para verificar se o usuario nao esta logado.
 *
 * Caso nao esteja o usuario é redirecionado com uma mensagem informando o possivel erro.
 */
function verificaUsuario()
{
    if (!usuarioEstaLogado()) {
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

/**
 * funcao para retornar se o usuario esta logado ou nao.
 * Caso esteja o usuario tera permissoes no sistema.
 * @return cookie do usuario
 */
function usuarioLogado()
{
    return $_COOKIE["usuario_logado"];
}


/**
 * Funcao que verifica se o usuario esta logado, é informado o email para registro,
 * passando o tempo de expiracao do cookie, este tempo é baseado no tempo do sistema mais alguns segundos / minutos conforme desejado
 * @param $email
 */
function logaUsuario($email){
    // inseri um cookie no usuario logado, passando um valor, tempo de expiracao.
    setcookie("usuario_logado", $email, time() + 12);

}