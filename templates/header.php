<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href=<?php echo '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/'?>>
    <title>Juegos</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg bg-light">
          
            <div class="container-fluid">
              <a class="navbar-brand" href="">Juegos</a>
              
              <?php if(isset($_SESSION['user'])):?>
                    <span class="navbar-text"><?= $_SESSION['user'] ?></span>
                <?php endif; ?>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="list">listado de juegos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="listCompanies">listado de companias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="showFormAdd">agregar un juego</a>
                  </li>
                  <?php if(isset($_SESSION['user'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">logout</a>
                            </li>
                        <?php endif; ?>

                </ul>
              </div>
            </div>
          </nav>
    </header>