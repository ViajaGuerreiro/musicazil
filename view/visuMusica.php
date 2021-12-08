<?php

include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
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
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o código da musica</label>
                        <input type="text" name="codigoMus" class="form-control" id="inputBusca" placeholder="1234">
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
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca2" class="form-label">Digite o nome da Musica</label>
                        <input type="text" name="nomeMus" class="form-control" id="inputBusca2" placeholder="Digita o nome">
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
                Por Data de Lançamento
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite a Data de Lançamento</label>
                        <input type="date" name="lancamento" class="form-control" id="inputBusca" placeholder="xx/xx/xxxx">
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
                Por Duração
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite a duração da musica</label>
                        <input type="time" name="duracao" class="form-control" id="inputBusca" placeholder="xx:xx">
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
                Por Genero
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite Genero da musica</label>
                        <input type="text" name="genero" class="form-control" id="inputBusca" placeholder="funk, rock, etc...">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Por Letra
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite a letra da musica</label>
                        <input type="text" name="letra" class="form-control" id="inputBusca" placeholder="To tranquilão tá lazer To cheirosão nos traje Dia de baile é assim Jack de maçã verde A vida é luta pra obter Disciplina e humildade Na mesa é balde de Gin Jack de maçã verde Que ela se interessa">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Por Link
            </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite o link da musica</label>
                        <input type="text" name="link" class="form-control" id="inputBusca" placeholder="https://www.youtube.com/watch?v=Unt3qRV2tK0&ab_channel=TvCostaGold">
                    </div>
                    <div class="col-12 p-1">
                        <button type="submit" class="btn btn-primary">Buscar ae truta!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Por Codigo do Artista
            </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form action="visuMusica.php" method="post">
                    <div class="col-12">
                        <label for="inputBusca" class="form-label">Digite Codigo do Artista</label>
                        <input type="text" name="codArt" class="form-control" id="inputBusca" placeholder="1234">
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
        <th scope="col">Código da Musica</th>
            <th scope="col">Nome da Musica</th>
            <th scope="col">Letra</th>
            <th scope="col">Data de lançamento</th>
            <th scope="col">Duração de musica</th>
            <th scope="col">Genero</th>
            <th scope="col">link</th>
            <th scope="col">Codigo do Artista</th>
            <th scope="col">Alterar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codigoMus = isset($_POST["codigoMus"]) ? $_POST["codigoMus"] : "";
        $nomeMusica = isset($_POST["nomeMus"]) ? $_POST["nomeMus"] : "";
        $lancamento = isset($_POST["lancamento"]) ? $_POST["lancamento"] : "";
        $duracao = isset($_POST["duracao"]) ? $_POST["duracao"] : "";
        $genero = isset($_POST["genero"]) ? $_POST["genero"] : "";
        $letra = isset($_POST["letra"]) ? $_POST["letra"] : "";
        $link = isset($_POST["link"]) ? $_POST["link"] : "";
        $codArt = isset($_POST["codArt"]) ? $_POST["codArt"] : "";

        $musica = listarTodasMusicas($conexao);



        if ($codigoMus) {
            $musica = listaMusicaCodigo($conexao,$codigoMus);
        } else if($nomeMusica) {
            $musica = listaMusicaNome($conexao,$nomeMusica);
        }
        else if($lancamento) {
            $musica = listaMusicaLancamento($conexao,$lancamento);
        }
        else if($duracao) {
            $musica = listaMusicaDuracao($conexao,$duracao);
        }
        else if($genero) {
            $musica = listaMusicaGenero($conexao,$genero);
        }
        else if($letra) {
            $musica = listaMusicaLetra($conexao,$letra);
        }
        else if($link) {
            $musica = listaMusicaLink($conexao,$link);
        }
        else if($codArt) {
            $musica =  listaMusicaCodigoArt($conexao,$codArt);
        }

        
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
                <td>
                    <form action="../view/formAlterarMusica.php" method="POST">
                        <input type="hidden" name="codigoMusica" value="<?= $musicas["codigo da musica"] ?>">
                        <button type="submit" class="btn btn-success">Alterar</button>

                    </form>
                </td>
                <td>
                    <form action="../controller/deletarMusica.php" method="POST">
                        <input id="DeletarMus" type="hidden" name="codMus" value="<?= $musicas["codigo da musica"] ?>">
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