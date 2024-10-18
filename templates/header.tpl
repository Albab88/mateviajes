<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MateViajes</title>
</head>
<body>
  <img src="img/Banner.jpg" class="img-fluid" alt="...">
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color:rgb(105, 38, 38); margin-bottom:20px">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          {if !$userLogged}
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login">LogIn</a>
            </li>
          {else}
          <li>
            <a class="nav-link active" href="logOut">LogOut</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Agregar Elementos
            </a>
            <ul class="dropdown-menu" style="background-color:rgb(105, 38, 38);">
              <li><a class="dropdown-item" href="nuevoviaje">+Viajes</a></li>
              <li><a class="dropdown-item" href="nuevovehiculo">+Vehiculos</a></li>
            </ul>
          </li>
          {/if}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="vehiculos">Nuestra flota...</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
