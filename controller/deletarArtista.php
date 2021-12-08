<?php

include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
extract($_REQUEST, EXTR_OVERWRITE);
if(deletarArtista($conexao, $codArt)) {
    
    header("Location: ../view/visuArtista.php");
} 
else {
    header("Location: ../view/visuArtista.php");
}

?>