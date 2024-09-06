<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <?php include_once "../Views/layouts/bootstrap.php"?>
    <link rel="stylesheet" href="/public/css/registro.css">
  </head>
  <body class="regis">
    
    <form id="reg" method="POST">
      <h4 class="titulo-regis">Registro</h4>
      <?php
      include_once "../Data/Database.php";
      include_once "../Logic/logic_user.php"
      ?>
      <div class="mb-2">
        <label for="validationTooltip02" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationTooltip02" name="nombre" required>
      </div>
      <div class="mb-2">
        <label for="validationTooltip03" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="validationTooltip03" name="apellido">
      </div>
    
      <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="@ correo">
          
      </div>
      <div class="mb-2">
        <label for="validationTooltip04" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="validationTooltip04" name="telefono">
      </div>

      <div class="input-group" id="direccion"> 
        <span class="input-group-text">Direccion</span>
        <input type="text" aria-label="First name" class="form-control" name="barrio" placeholder="Barrio">
        <input type="text" aria-label="Last name" class="form-control" name="calle_carrera" placeholder="Calle">
        <input type="text" aria-label=" name" class="form-control" name="numero" placeholder="número">
      </div>

      <div class="mb-2">
        <label for="Password1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="Password1" name="contrasena" placeholder="contraseña">
      </div>

      <!-- (name="registrar") para llamarlo desde logic_user.php -->
      <button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
      <button type="reset" class="btn btn-success" name="limpiar" value="ok">limpiar</button>
    </form>
    
</body>
</html>    