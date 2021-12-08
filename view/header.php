<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <title>Sistema de musicas Musicazil</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Musicazil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuários
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../view/cadUsuario.php">Cadastrar Usuario</a></li>
              <li><a class="dropdown-item" href="../view/visuTudoUsuario.php">Todos Usuarios</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../view/visuUsuario.php">Pesquisar Usuario</a></li>
            </ul>
          </li>

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../view/cadCliente.php">Cadastrar Clientes</a></li>
                <li><a class="dropdown-item" href="../view/visuTudoCliente.php">Todos Clientes</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../view/visuCliente.php">Pesquisar Cliente</a></li>
              </ul>
            </li>
          </ul>

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Artistas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../view/cadArtista.php">Torne-se um artista</a></li>
                <li><a class="dropdown-item" href="../view/visuTudoArtista.php">Todos artista</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../view/visuArtista.php">Pesquisar Artista</a></li>
              </ul>
            </li>
          </ul>

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Musicas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../view/cadMusica.php">Cadastrar musica</a></li>
                <li><a class="dropdown-item" href="../view/visuTudoMusica.php">Todas as musicas</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../view/visuMusica.php">Pesquisar musica</a></li>
              </ul>
            </li>
          </ul>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
      </div>


    </div>
  </nav>

  <div class="container">