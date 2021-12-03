<?php

include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
include_once("../view/header.php");

?>

<table class="table table-success table-striped m-4 p-4">
    <thead>
        <tr>
            <th scope="col">Código de Artista</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Codigo de Cliente</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $artista = listarTodosArtistas($conexao);
        foreach ($artista as $artistas) {
        ?>
            <tr>
                <th scope="row"><?= $artistas["codigo do artista"] ?></th>
                <td><?= $artistas["nome"] ?></td>
                <td><?= $artistas["telefone"] ?></td>
                <td><?= $artistas["nascimento"] ?></td>
                <td><?= $artistas["codigo do cliente"] ?></td>
                <td>
                    <form action="../controller/deletarArtista.php" method="POST">
                        <input id="DeletarArt" type="hidden" name="codArt" value="<?= $artistas["codigo do Artista"] ?>">
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