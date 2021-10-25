<?php

function inserirUsuarioBanco($conexao, $email, $senha){
    $query = "insert into tb_usuario(email_usu, senha_usu) values('{$email}', '{$senha}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

?>