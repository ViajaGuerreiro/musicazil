<?php

include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(alterarMusica($conexao,$idmus, $nome, $lancamento,$duracao, $genero, $letra, $link)) {
    header("Location: ../view/visuMusica.php");
} 
else {
    header("Location: ../view/visuMusica.php");
}

?>