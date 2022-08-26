                             <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport", initial-scale=1.0>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	
</head>
<body>
	<h2>Crear usuario</h2>
            <form action="?c=Users&a=create" method="post">
              <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" name=""  id="nombre"aria-describedby="emailHelp">
              </div>              
              <div class="form-group">
                <label for="apellido"> Apellido </label>
                <input type="text"  id="apellido"aria-describedby="emailHelp">
              </div>
              <div class="form-group">
    <label for="exampleFormControlSelect1">Perfil</label>
    <select class="form-control" name="rol" id="exampleFormControlSelect1">
      <option value="1">Administrador</option>
      <option value="2">Empleado</option>
      <option value="3">Cliente</option>
    </select>
  </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input type="email" class="form-control" name="correoUsuario" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="passwordUsuario" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2" >Confirmar contraseña</label>
                <input type="password" class="form-control" name="passwordUsuario" id="exampleInputPassword2">
              </div>  
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </form>
	<!-- Scripts -->
	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>