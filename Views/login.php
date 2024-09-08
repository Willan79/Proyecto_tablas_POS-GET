<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/registro.css">
</head>

<body class="regis">
  <form id="reg" method="POST" action="">
    <h4 class="titulo-regis">Login</h4>
  
    <?php
    include_once "../Data/Database.php";
    include_once "../Logic/logic_login.php"
    ?>
    <div class="mb-2">
      <label for="correo" class="form-label">Email</label>
      <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="email" placeholder="@correo">
    </div>

    <div class="mb-2">
      <label for="Password1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="Password1" name="contraseña" placeholder="contraseña">
    </div>
    <button type="submit" class="btn btn-primary" name="btnIngresar" value="ok">Ingresar</button>
    <div class="form-text">¿no estas registrado?</div>
    <a href="/Views/registro_user.php">Registrate aquí</a>
    <p class="form-text">olvido la contraseña, clic aquí</p>
    <a href="/Views/panel_admin.php">Admin</a>
  </form>

</body>

</html>