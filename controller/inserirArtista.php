<?php

include_once("../model/modelArtista.php");
include_once("../model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(inserirArtistaBanco($conexao, $codigoCliente)) {
    header("Location: ../view/cadArtista.php");
} else {
    header("Location: ../view/cadArtista.php");
}

?>