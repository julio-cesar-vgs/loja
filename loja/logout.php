<?php require_once ("logica-usuario.php");
logout();
$_SESSION["sucess"] = "Deslogado com sucesso";
header("Location: index.php");
die();

// procedimento acima sera feito para deslogar do sistema.

