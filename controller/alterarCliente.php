<?php

include_once("../model/conexao.php");
include_once("../model/modelCliente.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(alterarCliente($conexao,$codigoCli, $nome, $telefone, $nascimento)) {
    header("Location: ../view/visuCliente.php");
} 
else {
    header("Location: ../view/visuCliente.php");
}

?>