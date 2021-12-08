<?php
    include_once("header.php");
?>

<form id="formusu" method="POST" action="../controller/inserirMusica.php">
  <div class="mb-3">
    <label class="subtitles" for="nome" class="form-label">Nome da musica</label>
    <input type="text" required class="form-control" name="nome" id="nome">
  <div class="mb-3">
    <label class="subtitles" for="lancamento" class="form-label">Data de lançamento</label>
    <input type="date" required name="data" class="form-control" id="lancamento">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="duracao" class="form-label">duracao da musica</label>
    <input type="text" required name="duracao" class="form-control" id="duracao">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="genero" class="form-label">Genero</label>
    <input type="text" required name="genero" class="form-control" id="genero">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="letra" class="form-label">Letra</label>
    <input type="text" name="letra" class="form-control" id="letra">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="link" class="form-label">Link da musica</label>
    <input type="text" required name="link" class="form-control" id="link">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="codArtista" class="form-label">Codigo do Artista</label>
    <input type="text" required name="codArtista" class="form-control" id="codArtista">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar Musica</button>
</form>

<?php
    include_once("footer.php");
?>