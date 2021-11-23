<?php
    include_once("../model/modelUsuario.php");
    include_once("../model/conexao.php");
    include_once("header.php");

    extract($_REQUEST,EXTR_OVERWRITE);

    $resultado = listaUsuarioCodigo($conexao, $codUsu);
    $usuario = mysqli_fetch_assoc($resultado);
?>

<form id="formusu" method="POST" action="../controller/alterarUsuario.php">

<div class="mb-3">
    <label class="subtitles" for="codigo" class="form-label">Código</label>
    <input type="text" class="form-control" name="idUsu" readonly value="<?= $usuario["idusu"]?>" id="Codigo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="Email" class="form-label">Email</label>
    <input type="email" required class="form-control" name="email" value="<?= $usuario["emailusu"] ?>" id="Email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="subtitles" for="senha" class="form-label">Senha</label>
    <input type="password" required name="senha" class="form-control" id="senha">
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>

<?php
    include_once("footer.php");
?>