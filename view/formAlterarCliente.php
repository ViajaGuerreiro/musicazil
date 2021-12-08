<?php
    include_once("../model/modelCliente.php");
    include_once("../model/conexao.php");
    include_once("header.php");

    extract($_REQUEST,EXTR_OVERWRITE);

    $resultado = listaClienteCodigo($conexao, $codCliente);
    $cliente = mysqli_fetch_assoc($resultado);
?>

<form id="formusu" method="POST" action="../controller/alterarCliente.php">

  <div class="mb-3">
    <label class="subtitles" for="idcli" class="form-label">Codigo do Cliente</label>
    <input type="text" readonly class="form-control" name="$idcli" value= "<?= $cliente["codigo do cliente"] ?>" id="Idcli">
    </div>

  <div class="mb-3">
    <label class="subtitles" for="nome" class="form-label">Nome</label>
    <input type="text" required class="form-control" value= "<?= $cliente["nome"] ?>"  name="nome" id="nome">
  </div>

  <div class="mb-3">
    <label class="subtitles" for="telefone" class="form-label">Telefone</label>
    <input type="tel" required name="telefone" value= "<?= $cliente["telefone"] ?>" maxlength="11" class="form-control" id="telefone">
  </div>

  <div class="mb-3">
    <label class="subtitles" for="nascimento" class="form-label">Nascimento</label>
    <input type="date" required name="nascimento" value= "<?= $cliente["nascimento"] ?>" class="form-control" id="nascimento">
  </div>

  <button type="submit" class="btn btn-primary">Alterar</button>

</form>

<?php
    include_once("footer.php");
?>