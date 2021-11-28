<?php
    include_once("header.php");
?>

<form id="formusu" method="POST" action="../controller/inserirUsuario.php">
  <div class="mb-3">
    <label class="subtitles" for="Email" class="form-label">Email</label>
    <input type="email" required class="form-control" name="email" id="Email" aria-describedby="emailHelp">
  <div class="mb-3">
    <label class="subtitles" for="senha" class="form-label">Senha</label>
    <input type="password" required name="senha" class="form-control" id="senha">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php
    include_once("footer.php");
?>