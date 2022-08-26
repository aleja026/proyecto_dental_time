<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
</head>
<body>
  <h2>Consultar Usuarios</h2>
  <form action="?c=Users&a=update" method="post" class="table">
    <div>
      <input type="hidden" name="idUsuario" id="idUsuario" class="form-control" value="<?php echo $user->getIdUsuario();?>">
      <div></div>
      <label></label>
    </div>
  </form>
  <table class="table">
    
    <thead class="thead-dark">
      <tr>
        <th scope="col">Rol</th>
        <th scope="col">Id</th>        
        <th scope="col">Correo</th>
        <th scope="col">PassWord</th>
        <th scope="col">Estado</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Documento</th>
        <th scope="col">Dirección</th>
        <th scope="col">Telefono</th>
        <th scope="col">     </th>
        <th scope="col">     </th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($users as $user) : ?>
        <tr>
          <td class="font-weight-normal"><?php echo $user-> getidRol();?></td>
          <th><?php echo $user->getIdUsuario(); ?></th>
          <td><?php echo $user-> getCorreoUsuario();?></td>
          <td><?php echo $user-> getEstadoUsuario();?></td>
          <td><?php echo $user-> getPasswordUsuario();?></td>
          <td><?php echo $user-> getNombreUsuario();?></td>
          <td><?php echo $user-> getApellidoUsuario();?></td>
          <td><?php echo $user-> getDocumentoUsuario();?></td>
          <td><?php echo $user-> getDireccionUsuario();?></td>
          <td><?php echo $user-> getTelefonoUsuario();?></td>
          <td>
            <a href="?Users&a=update&idUsuario=<?php echo $user->getIdUsuario()?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
            </td>
            <td>
            <a href="?c=Users&a=delete&idUsuario=<?php echo $user->getIdUsuario() ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
          </td>
        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- Scripts -->
  <script src="../js/jquery-3.5.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>