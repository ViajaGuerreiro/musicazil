<?php

include_once("../model/conexao.php");
include_once("../model/modelCliente.php");
extract($_REQUEST, EXTR_OVERWRITE);
if(deletarCliente($conexao, $codCli)) {
    
    header("Location: ../view/visuCliente.php");
} 
else {
    header("Location: ../view/visuCliente.php");
}

?>