<?php
    include_once("header.php");
?>

<form id="formusu" method="POST" action="../controller/inserirArtista.php">
  <div class="mb-3">
    <label class="subtitles" for="codigo" class="form-label">Codigo do cliente</label>
    <input type="text" required class="form-control" name="codigoCliente" id="codigo">
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Cadastrar Artista</button>
</form>

<?php
    include_once("footer.php");
?>