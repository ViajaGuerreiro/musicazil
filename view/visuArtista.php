<?php

include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
include_once("../model/modelCliente.php");
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
                <form action="visuArtista.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o código do Artista</label>
                        <input type="text" name="codigoCli" class="form-control" id="inputBusca" placeholder="1234">
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
                Por Nome
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuArtista.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca2" class="form-label">Digite o nome</label>
                        <input type="text" name="nomeCli" class="form-control" id="inputBusca2" placeholder="Digita o nome">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Por telefone
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuArtista.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o telefone</label>
                        <input type="text" name="telefoneCli" class="form-control" id="inputBusca" placeholder="11911111111">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Por Data de Nascimento
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuArtista.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite a Data de Nascimento</label>
                        <input type="date" name="nascimentoCli" class="form-control" id="inputBusca" placeholder="xx/xx/xxxx">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Por Codigo de Usuario
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuArtista.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o codigo de usuario</label>
                        <input type="text" name="codigoCliUsu" class="form-control" id="inputBusca" placeholder="1234">
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
            <th scope="col">Código do Artista</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Codigo de Cliente</th>
            <th scope="col">Alterar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codigoCli = isset($_POST["codigoCli"]) ? $_POST["codigoCli"] : "";
        $nomeCliente = isset($_POST["nomeCli"]) ? $_POST["nomeCli"] : "";
        $telefoneCliente = isset($_POST["telefoneCli"]) ? $_POST["telefoneCli"] : "";
        $nascimentoCliente = isset($_POST["nascimentoCli"]) ? $_POST["nascimentoCli"] : "";
        $codigoCliUsu = isset($_POST["codigoCliUsu"]) ? $_POST["codigoCliUsu"] : "";

        $cliente = listarTodosClientes($conexao);



        if ($codigoCli) {
            $cliente = listaClienteCodigo($conexao, $codigoCli);
        } else if($nomeCliente) {
            $cliente = listaNomeCli($conexao, $nomeCliente);
        }
        else if($telefoneCliente) {
            $cliente = listaTelefoneCli($conexao,$telefoneCliente);
        }
        else if($nascimentoCliente) {
            $cliente = listaNascimentoCli($conexao,$nascimentoCliente);
        }
        else if($codigoCliUsu) {
            $cliente = listaClienteCodigoUsuario($conexao,$codigoCliUsu);
        }
        
        foreach ($cliente as $clientes) {
        ?>
            <tr>
                <th scope="row"><?= $clientes["codigo do cliente"] ?></th>
                <td><?= $clientes["nome"] ?></td>
                <td><?= $clientes["telefone"] ?></td>
                <td><?= $clientes["nascimento"] ?></td>
                <td><?= $clientes["codigo do usuario"] ?></td>
                <td>
                    <form action="../view/formAlterarCliente.php" method="POST">
                        <input type="hidden" name="codCli" value="<?= $clientes["codigo do cliente"] ?>">
                        <button type="submit" class="btn btn-success">Alterar</button>

                    </form>
                </td>
                <td>
                    <form action="../controller/deletarArtista.php" method="POST">
                        <input id="DeletarCli" type="hidden" name="codCli" value="<?= $clientes["codigo do cliente"] ?>">
                        <button type="submit" class="btn btn-danger">Excluir</button>
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