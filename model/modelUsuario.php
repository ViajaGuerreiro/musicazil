<?php

function inserirUsuarioBanco($conexao, $email, $senha){

    $opcao = ['cost' => 8];

    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = "insert into tbusuario(emailusu, senhausu) values('{$email}', '{$senhaCrypto}')";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listarTodosUsuarios($conexao) {
    $query = "select * from tbusuario";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaUsuarioCodigo($conexao,$codigoUsu){
    $query = "select * from tbusuario where idusu = '{$codigoUsu}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function ListaUsuarioEmail($conexao,$emailUsu){
    $query = "select * from tbusuario where emailusu like '%{$emailUsu}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function deletarUsuario($conexao, $codUsu) {
    $query = "delete from tbusuario where idusu = '{$codUsu}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function alterarUsuario($conexao, $email, $senha, $idUsu) {
    $opcao = ['cost' => 8];
    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);
    
    $query = "update tbusuario set emailusu = '{$email}', senhausu = '{$senhaCrypto}' where idusu = '{$idUsu}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

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
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where nomeclie = '%{$nomeCli}%'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaTelefoneCli($conexao,$telefoneCli){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where foneclie = '{$telefoneCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaNascimentoCli($conexao,$nascimentoCli){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where date_format(data_nasc, '%d/%m/Y') = '{$nascimentoCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function listaClienteCodigoUsuario($conexao,$codigoUsu){
    $query = "select idcli as 'codigo do cliente', nomeclie as 'nome', foneclie as 'telefone', date_format(data_nasc, '%d/%m/%Y') as 'nascimento', idusu as 'codigo do usuario' from tbcliente where date_format(data_nasc, '%d/%m/Y') = '{$codigoUsu}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

function deletarCliente($conexao, $codCli) {
    $query = "delete from tbcliente where idcli = '{$codCli}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}


?>