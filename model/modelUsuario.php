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

?>