<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/tablas.css" />
</head>

<body>
  <main class="panel">
    <section class="lateral bg-warning">
      <div class="div-logo">
        <img class="logo" src="../public/img/LG-022.png" />
      </div>

      <a href="/Views/panel_admin.php"><i class="bi bi-bar-chart"></i>Panel</a>
      <a href="/Views/admin_pedidos.php"><i class="bi bi-bell-fill"></i>Pedidos</a>
      <a href="/Views/admin_platos.php"><i class="bi bi-duffle"></i>Platos</p>
      <a><i class="bi bi-people-fill"></i> Usuarios</a>
    </section>

    <section class="cuerpo">
      <div class="bg-warning" id="superior">
        <button class="nav-burger2"><i class="bi bi-list"></i></button>
        <h3>Panel administrativo</h3>
        
      </div>
      <table class="table">
        <h3 class="User">Usuarios</h3>
        <thead class="encabezados bg-warning">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">DIRECCIÓN</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col"><i class="bi bi-trash "></i></th>
          </tr>
        </thead>
        <tbody>
          <?php

          include_once "../Data/Database.php";
          $sql = $conex->query("SELECT * FROM clientes");

          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <td><?= $datos->cliente_id ?></td>
              <td><?= $datos->nombre ?></td>
              <td><?= $datos->apellido ?></td>
              <td><?= $datos->email ?></td>
              <td><?= $datos->telefono ?></td>
              <td><?= $datos->direccion ?></td>
              <td><?= $datos->contraseña ?></td>
              <td id="accion">
                <a class="btn" id="btnAccion"><i id="papel" class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>
</body>
<script src="/public/js/navAdmin.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

</html>