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

function listaMusicaCodigo($conexao,$codigoMusica){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where idmusica = '{$codigoMusica}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaNome($conexao,$nome){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where nomemus like '%{$nome}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaLancamento($conexao,$lancamento){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where datalanmus = '{$lancamento}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaDuracao($conexao,$duracao){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where duracaomus like '%{$duracao}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaGenero($conexao,$genero){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where genmus like '%{$genero}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaLetra($conexao,$letra){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where letramus like '%{$letra}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaLink($conexao,$link){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where linkmus like '%{$link}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaMusicaCodigoArt($conexao,$codigoArt){
    $query = "select idmusica as 'codigo da musica', nomemus as 'nome', date_format(datalanmus, '%d/%m/%Y') as 'lancamento', duracaomus as 'duration', genmus as 'genero', letramus as 'letra', linkmus as 'link', idartfk as 'codigo do artista' from tbmusica where idartfk = '{$codigoArt}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function deletarMusica($conexao, $codMus) {
    $query = "delete from tbmusica where idmusica = '{$codMus}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function alterarMusica($conexao,$idmus, $nome, $lancamento,$duracao, $genero, $letra, $link) {
    $query = "update tbmusica set nomemus = '{$nome}', datalanmus = '{$lancamento}', duracaomus = '{$duracao}', genmus = '{$genero}', letramus = '{$letra}', linkmus = '{$link}'  where idmusica = '{$idmus}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}