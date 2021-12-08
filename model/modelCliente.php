<?php

function inserirClienteBanco($conexao, $nome, $telefone, $nascimento, $codigoUsu) {
    $query = "insert into tbcliente(nomeclie, foneclie, data_nasc, idusu) values('{$nome}', '{$telefone}', '{$nascimento}','{$codigoUsu}')";
    $resultado = mysqli_query($conexao,$query);
}

function listarTodosClientes($conexao) {
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaClienteCodigo($conexao,$codigoCli){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where idcli = '{$codigoCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaNomeCli($conexao,$nomeCli){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where nomeclie like '%{$nomeCli}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaTelefoneCli($conexao,$telefoneCli){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where foneclie like '%{$telefoneCli}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaNascimentoCli($conexao,$nascimentoCli){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where data_nasc = '{$nascimentoCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaClienteCodigoUsuario($conexao,$codigoUsu){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where idusu = '{$codigoUsu}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function deletarCliente($conexao, $codCli) {
    $query = "delete from tbcliente where idcli = '{$codCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function alterarCliente($conexao,$idCli, $nome, $telefone, $nascimento) {
    $query = "update tbcliente set nomeclie = '{$nome}', foneclie = '{$telefone}', data_nasc = '{$nascimento}'  where idcli = '{$idCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}