<?php
session_start();
function usuarioEstaLogado()
{
    return isset($_SESSION["usuario_logado"]);
}


/**
 * Funcao para verificar se o usuario nao esta logado.
 *
 * Caso nao esteja o usuario é redirecionado com uma mensagem informando o possivel erro.
 */
function verificaUsuario()
{
    if (!usuarioEstaLogado()) {
        //funcao para verificar se o usuario tem ou nao acesso a determinada funcao
        $_SESSION["danger"] = "Voce nao tem acesso a esta funcionalidade";
        header("Location: index.php");
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
    return $_SESSION["usuario_logado"];
}


/**
 * Funcao que verifica se o usuario esta logado, é informado o email para registro,
 * passando o tempo de expiracao do cookie, este tempo é baseado no tempo do sistema mais alguns segundos / minutos conforme desejado
 * @param $email
 */
function logaUsuario($email){
    // inseri um cookie no usuario logado, passando um valor, tempo de expiracao.
   $_SESSION["usuario_logado"] = $email;

}

function logout(){
    session_destroy();
    session_start();
}