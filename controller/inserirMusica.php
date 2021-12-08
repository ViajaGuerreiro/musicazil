<?php

include_once("../model/modelMusica.php");
include_once("../model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(inserirMusicaBanco($conexao, $nome, $data, $duracao, $genero, $letra, $link, $codArtista)) {
    header("Location: ../view/cadMusica.php");
} else {
    header("Location: ../view/cadMusica.php");
}

?>