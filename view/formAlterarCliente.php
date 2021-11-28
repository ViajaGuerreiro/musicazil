<?php
    include_once("../model/modelUsuario.php");
    include_once("../model/conexao.php");
    include_once("header.php");

    extract($_REQUEST,EXTR_OVERWRITE);

    $resultado = listaClienteCodigo($conexao, $codCli);
    $cliente = mysqli_fetch_assoc($resultado);
?>

<form id="formusu" method="POST" action="../controller/alterarCliente.php">

  <div class="mb-3">
    <label class="subtitles" for="idCli" class="form-label">Codigo do Cliente</label>
    <input type="text" readonly class="form-control" name="$codigoCli" id="IdCli">

  <div class="mb-3">
  <div class="mb-3">
    <label class="subtitles" for="nome" class="form-label">Nome</label>
    <input type="text" required class="form-control" name="nome" id="nome">
  <div class="mb-3">
    <label class="subtitles" for="telefone" class="form-label">Telefone</label>
    <input type="tel" required name="telefone" class="form-control" id="telefone">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="nascimento" class="form-label">Nascimento</label>
    <input type="date" required name="nascimento" class="form-control" id="nascimento">
  </div>
  <div class="mb-3">
    <label class="subtitles" for="codigoUsu" class="form-label">Codigo de Usuario</label>
    <input type="number" required name="codigoUsu" class="form-control" id="codigoUsu">
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>

<?php
    include_once("footer.php");
?>