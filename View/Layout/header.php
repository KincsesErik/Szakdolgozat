<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Game Haven</title>
    <link rel="icon" type="image/x-icon" href="gamelogo.png">
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5825cc">
    <div class="container-fluid">
      <img src='gamelogo.png' width="45" height="40" class="d-inline-block align-top" alt="LOGO">
      <a class="navbar-brand" href="#">Game Haven</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Kezdőlap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=login&action=login">Bejelentkezés/Regisztráció</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Platform
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">PC</a></li>
              <li><a class="dropdown-item" href="#">Play Station</a></li>
              <li><a class="dropdown-item" href="#">Nintendo</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex justify-content-center" role="search">
          <div class="input-group">
            <input class="form-control me-2" type="search" placeholder="Keresés" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Keres</button>
          </div>
        </form>
              <?php
              if(isset($_SESSION['id'])){
                echo'
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        '.$_SESSION['nev'].'
                    </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="index.php?page=login&action=logout">Kijelentkezés</a></li>
                      </ul>
                      ';
              }
              ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
