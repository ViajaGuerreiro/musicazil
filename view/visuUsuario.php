<?php

include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
include_once("../view/header.php");
?>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Por Código
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuUsuario.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o código</label>
                        <input type="text" name="codigoUsu" class="form-control" id="inputBusca" placeholder="1234">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Por E-mail
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuUsuario.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o E-mail</label>
                        <input type="text" name="emailUsu" class="form-control" id="inputBusca" placeholder="Digita o E-mail">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<table class="table table-success table-striped m-4 p-4">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Email</th>
            <th scope="col">Alterar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codigoUsu = isset($_POST["codigoUsu"]) ? $_POST["codigoUsu"] : "";
        $emailUsu = isset($_POST["emailUsu"]) ? $_POST["emailUsu"] : "";

        if ($codigoUsu) {
            $usuario = listaUsuarioCodigo($conexao, $codigoUsu);
        } else {
            $usuario = ListaUsuarioEmail($conexao, $emailUsu);
        }
        //$usuario = listarTodosUsuarios($conexao);
        foreach ($usuario as $usuarios) {
        ?>
            <tr>
                <th scope="row"><?= $usuarios["idusu"] ?></th>
                <td><?= $usuarios["emailusu"] ?></td>
                <td>
                    <form action="../controller/alterarUsuario.php" method="POST">
                        <input type="hidden" name="idUsuario" value="<?= $usuarios["idusu"] ?>">
                        <button type="submit" class="btn btn-success">Alterar</button>

                    </form>
                </td>
                <td>
                    <form action="../controller/deletarUsuario.php" method="POST">
                        <input type="hidden" name="idUsuario" value="<?= $usuarios["emailusu"] ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>

                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php

include_once("../view/footer.php");

?>