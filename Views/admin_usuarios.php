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
<script>
    function eliminarCliente() {
      var respuesta = confirm("¿Deseas eliminar este cliente?");
      return respuesta
    }
  </script>
  <main class="panel">
    <section class="lateral bg-warning">
      <div class="div-logo">
        <img class="logo" src="../public/img/LG-022.png" />
      </div>

      <a href="/Views/panel_admin.php"><i class="bi bi-bar-chart"></i>Panel</a>
      <a href="/Views/admin_pedidos.php"><i class="bi bi-bell-fill"></i>Pedidos</a>
      <a href="/Views/admin_platos.php"><i class="bi bi-duffle"></i>Platos</p>
      <a><i class="bi bi-people-fill"></i> Usuarios</a>
      <div class="adm-ini">
        <a href="/index.php"><i class="bi bi-house-door-fill"></i>Inicio</a>
      </div>
      
    </section>

    <section class="cuerpo">
      <div class="bg-warning" id="superior">
        <button class="nav-burger2"><i class="bi bi-list"></i></button>
        <h3>Panel administrativo</h3>

      </div>

      <?php
      include_once "../Data/Database.php";
      include "../Logic/logic_eliminar_user.php";
      ?>

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
          
          $sql = $conex->query(
            "SELECT cliente_id, nombre , apellido , email , telefono , barrio, calle_carrera,numero, contrasena
            FROM clientes c 
            INNER JOIN direccion d
            ON  c.direccion_id = d.direccion_id"
          );
          
          
          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <th><?= $datos->cliente_id ?></th>
              <td><?= $datos->nombre ?></td>
              <td><?= $datos->apellido ?></td>
              <td><?= $datos->email ?></td>
              <td><?= $datos->telefono ?></td>
              <td><?= $datos->barrio .". " . $datos->calle_carrera . ". " . $datos->numero?></td>
              <td><?= $datos->contrasena ?></td>
              <td id="accion">
                <a onclick="return eliminarCliente()" id="btnAccion" href="/Views/admin_usuarios.php?id=<?= $datos->cliente_id ?>" class="btn"><i id="papel" class="bi bi-trash3"></i></a>
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
<?php include_once "../Views/layouts/bootstrap_JS.php"?>

</html>