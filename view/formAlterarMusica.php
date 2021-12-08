<?php
    include_once("../model/modelMusica.php");
    include_once("../model/conexao.php");
    include_once("header.php");

    extract($_REQUEST,EXTR_OVERWRITE);

    $resultado = listaMusicaCodigo($conexao, $codigoMusica);
    $musica = mysqli_fetch_assoc($resultado);
?>

<form id="formusu" method="POST" action="../controller/alterarMusica.php">

<div class="mb-3">
    <label class="subtitles" for="codMus" class="form-label">Codigo da Musica</label>
    <input type="text" readonly value="<?= $musica["codigo da musica"]?>" name="idmus" class="form-control" id="codMus">
  </div>

<div class="mb-3">
    <label class="subtitles" for="nome" class="form-label">Nome da musica</label>
    <input type="text" required class="form-control" value="<?= $musica["nome"]?>" name="nome" id="nome">
  <div class="mb-3">
    <label class="subtitles" for="lancamento" class="form-label">Data de lançamento</label>
    <input type="date" required name="lancamento" value="<?= $musica["lancamento"]?>" class="form-control" id="lancamento">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="duracao" class="form-label">duracao da musica</label>
    <input type="text" required value="<?= $musica["duration"]?>" name="duracao" class="form-control" id="duracao">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="genero" class="form-label">Genero</label>
    <input type="text" required value="<?= $musica["genero"]?>" name="genero" class="form-control" id="genero">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="letra" class="form-label">Letra</label>
    <input type="text" name="letra" value="<?= $musica["letra"]?>" class="form-control" id="letra">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="link" class="form-label">Link da musica</label>
    <input type="text" required value="<?= $musica["link"]?>" name="link" class="form-control" id="link">
  </div>

  <button type="submit" class="btn btn-primary">Alterar Musica</button>

</form>

<?php
    include_once("footer.php");
?>