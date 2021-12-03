<?php

include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
extract($_REQUEST, EXTR_OVERWRITE);
if(deletarArtista($conexao, $codArt)) {
    
    header("Location: ../view/visuTudoArtista.php");
} 
else {
    header("Location: ../view/visuTudoArtista.php");
}

?>