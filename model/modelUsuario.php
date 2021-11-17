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
    $opcao = ["cost" => 8];
    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);
    
    $query = "update tbusuario set emailusu = '{$email}', senhausu = '{$senha}' where idusu = '{$idUsu}'";
    $resultado = mysqli_query($conexao, $query);
return $resultado;
}

?>