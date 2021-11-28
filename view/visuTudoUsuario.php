<?php

include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
include_once("../view/header.php");

?>

<table class="table table-success table-striped m-4 p-4">
  <thead>
    <tr>
      <th scope="col">Código de Usuario</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $usuario = listarTodosUsuarios($conexao);
    $cliente = listarTodosClientes($conexao);
    foreach ($usuario as $usuarios) {
    ?>
      <tr>
        <th scope="row"><?= $usuarios["idusu"] ?></th>
        <td><?= $usuarios["emailusu"] ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>


<?php

include_once("../view/footer.php");

?>