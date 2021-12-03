<?php

function inserirArtistaBanco($conexao, $codigoCliente) {
    $query = "insert into tbartista(idclifk) values('{$codigoCliente}')";
    $resultado = mysqli_query($conexao,$query);
}