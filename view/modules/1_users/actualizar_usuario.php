<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<h2>Actualizar usuarios</h2>

<div class="container">
		<form action="../../modules/1_users/actualizar_usuario.php" 
		      method="post">
            
		   <h1 class="display-4 text-center">Actualizar Registro</h1><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="nombre">Nombre</label>
		     <input type="name" 
		           class="form-control" 
		           id="nombre" 
		           name="nombre" 
		           value="<?=$row['nombre'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="apellido">Apellido</label>
		     <input type="name" 
		           class="form-control" 
		           id="apellido" 
		           name="apellido" 
		           value="<?=$row['apellido'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Correo</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="contra">N° Identificacion</label>
		     <input type="name" 
		           class="form-control" 
		           id="contra" 
		           name="contra" 
		           value="<?=$row['contra'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="curso">Curso</label>
		     <input type="name" 
		           class="form-control" 
		           id="curso" 
		           name="curso" 
		           value="<?=$row['curso'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="fecha_reg">Fecha de Registro</label>
		     <input type="date" 
		           class="form-control" 
		           id="fecha_reg" 
		           name="fecha_reg" 
		           value="<?=$row['fecha_reg'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="id_cargo">Rol</label>
			 <br>
			 <select name="id_cargo" id="id_cargo">
			 <option value="1"> Administrador<br>
			 <option value="2"> Estudiante<br>
			 <option value="3"> Candidato<br>
		     </select>
		     
		   </div>


		   	<div class="form-group">
		   		<label for="voto">Voto por:</label>
		   		<br>

		   		<select name="voto" id="voto">
					<?php
						$consulta="SELECT * FROM candidato";
						$ejecutar=mysqli_query($conn, $consulta) or die(mysqli_error($conn))
					?>
					<?php foreach($ejecutar as $opciones): ?>
						<option  value="<?php echo $opciones['nombre']?>"><?php echo $opciones['nombre']?></option>
					<?php endforeach ?>
				</select>

		   	</div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Actualizar</button>
		    <a href="read.php" class="link-primary botonAtras" >Atras</a>
	    </form>
	</div>



	<!-- <form>
		       <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico actual</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
		       <div class="form-group">
                <label for="exampleInputEmail2">Nuevo correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
              </div>
              <div>
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>        
                </div>    
	</form> -->
	<!-- Scripts -->
	<script src="../../js/jquery-3.5.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>