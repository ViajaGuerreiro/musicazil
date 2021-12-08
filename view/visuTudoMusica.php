<?php

include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
include_once("../view/header.php");

?>

<table class="table table-success table-striped m-4 p-4">
    <thead>
        <tr>
            <th scope="col">Código da Musica</th>
            <th scope="col">Nome da Musica</th>
            <th scope="col">Letra</th>
            <th scope="col">Data de lançamento</th>
            <th scope="col">Duração de musica</th>
            <th scope="col">Genero</th>
            <th scope="col">link</th>
            <th scope="col">Codigo do Artista</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $musica = listarTodasMusicas($conexao);
        foreach ($musica as $musicas) {
        ?>
            <tr>
                <th scope="row"><?= $musicas["codigo da musica"] ?></th>
                <td><?= $musicas["nome"] ?></td>
                <td><?= $musicas["letra"] ?></td>
                <td><?= $musicas["lancamento"] ?></td>
                <td><?= $musicas["duration"] ?></td>
                <td><?= $musicas["genero"] ?></td>
                <td><a href= "<?=$musicas["link"]?>"><?= $musicas["link"]?></a></td>
                <td><?= $musicas["codigo do artista"] ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php

include_once("../view/footer.php");

?>