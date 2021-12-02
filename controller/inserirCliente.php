<?php

include_once("../model/modelCliente.php");
include_once("../model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(inserirClienteBanco($conexao, $nome, $telefone, $nascimento, $codigoUsu)) {
    header("Location: ../view/cadCliente.php");
} else {
    header("Location: ../view/cadCliente.php");
}

?>