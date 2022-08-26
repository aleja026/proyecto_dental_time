<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página principal</title>
  <!-- Estilos -->
  <link rel="shortcut icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="assets/css/all.css"> 
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <!-- Contenedor -->
  <div class="container-fluid">
    <!-- Navegación -->
    <nav class="row navbar navbar-expand-lg navbar-light sticky-top">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 mr-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contáctenos</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ingreso
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registro">Registro</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ingreso">Inicio de sesión</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- ventana modal Registro -->
    <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" id="nombre"aria-describedby="emailHelp">
              </div>              
              <div class="form-group">
                <label for="apellido"> Apellido </label>
                <input type="text" id="apellido"aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="num">Telefono</label>
                <input type="number" id="num">  
              </div>
              <div class="form-group">
                <label for="direc">Direccion</label>
                <input type="text" id="num">  
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2">Confirmar contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
              </div>  
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.html">Cancelar</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ventana modal Ingreso -->
    <div class="modal fade" id="ingreso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="?c=Login" method="POST">
              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input name="userEmailLog" type="email" class="form-control" id="usuario" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input name="userPassLog" type="password" class="form-control" id="contrasena">
                <a href="#" data-toggle="modal" data-target="#olvido"><small id="emailHelp" class="form-text text-muted">¿Olvidó su contraseña?</small></a>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.html">Cancelar</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ventana modal olvido contras -->
    <div class="modal fade" id="olvido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Olvidó su contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="olvidcontra">Correo electrónico</label>
                <input type="email" class="form-control" id="olvidcontra" aria-describedby="emailHelp">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.html">Cancelar</a> </button>
            <button type="button" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- frase -->
    <div class="nosotros">
      <div id="nosotros"></div>
      <div class="titulo row text-center">
        <div class="col p-2 text-white" style="background-color: #5bc0de;">
          <h4><i> "Salud Oral con Sentido Humano"</i></h4>
        </div>
      </div>
    </div>