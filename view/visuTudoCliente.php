<?php

include_once("../model/conexao.php");
include_once("../model/modelCliente.php");
include_once("../view/header.php");

?>

<table class="table table-success table-striped m-4 p-4">
    <thead>
        <tr>
            <th scope="col">Código de Cliente</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Codigo de Usuario</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $cliente = listarTodosClientes($conexao);
        foreach ($cliente as $clientes) {
        ?>
            <tr>
                <th scope="row"><?= $clientes["codigo do cliente"] ?></th>
                <td><?= $clientes["nome"] ?></td>
                <td><?= $clientes["telefone"] ?></td>
                <td><?= $clientes["nascimento"] ?></td>
                <td><?= $clientes["codigo do usuario"] ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php

include_once("../view/footer.php");

?>