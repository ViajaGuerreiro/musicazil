<?php


function inserirMusicaBanco($conexao, $nome, $data, $duracao, $genero, $letra, $link, $codArtista) {
    $query = "insert into tbmusica(nomemus, datalanmus, duracaomus, genmus, letramus, linkmus, idartfk) values ('{$nome}', '{$data}', '{$duracao}', '{$genero}', '{$letra}', '{$link}', '{$codArtista}' ) ";
    $resultado = mysqli_query($conexao, $query);
}

function listarTodasMusicas($conexao) {
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}