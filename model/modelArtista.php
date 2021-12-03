<?php

function inserirArtistaBanco($conexao, $codigoCliente) {
    $query = "insert into tbartista(idclifk) values('{$codigoCliente}')";
    $resultado = mysqli_query($conexao,$query);
}

function listarTodosArtistas($conexao) {
    $query = "SELECT cli.idcli as 'codigo do cliente', cli.nomeclie as 'nome', cli.foneclie as 'telefone', date_format(cli.data_nasc, '%d/%m/%Y') as 'nascimento', art.idart as 'codigo do artista' FROM tbartista AS art INNER JOIN tbcliente AS cli ON art.idclifk = cli.idcli";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deletarArtista($conexao, $codArt) {
    $query = "delete from tbartista where idart = '{$codArt}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}