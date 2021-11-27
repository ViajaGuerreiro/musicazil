<?php
    include_once("header.php");
?>

<form id="formusu" method="POST" action="../controller/inserirCliente.php">
  <div class="mb-3">
    <label class="subtitles" for="nome" class="form-label">Nome</label>
    <input type="email" class="form-control" name="nome" id="nome">
  <div class="mb-3">
    <label class="subtitles" for="senha" class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control" id="senha">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php
    include_once("footer.php");
?>