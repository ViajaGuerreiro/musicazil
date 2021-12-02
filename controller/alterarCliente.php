<?php

include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
extract($_REQUEST, EXTR_OVERWRITE);

$nascimento = implode("-",array_reverse(explode("/",$nascimento)));

if(alterarCliente($conexao,$codigoCli, $nome, $telefone, $nascimento, $codigoUsu)) {
    header("Location: ../view/visuCliente.php");
} 
else {
    header("Location: ../view/visuCliente.php");
}

?>