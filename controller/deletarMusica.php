<?php

include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(deletarMusica($conexao, $codMus)) {
    header("Location: ../view/visuMusica.php");
} 
else {
    header("Location: ../view/visuMusica.php");
}

?>