<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos admin</title>

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
      <a><i class="bi bi-bell-fill"></i>Pedidos</a>
      <a href="/Views/admin_platos.php"><i class="bi bi-duffle"></i>Platos</a>
      <a href="/Views/admin_usuarios.php"><i class="bi bi-people-fill"></i>Usuarios</a>
    </section>

    <section class="cuerpo">
      <div class="bg-warning" id="superior">
        <button class="nav-burger2"><i class="bi bi-list"></i></button>
        <h3>Panel administrativo</h3>

      </div>
      <table class="table">
        <h3 class="User">Pedidos</h3>
        <thead class="encabezados bg-warning">
          <tr>
            <th scope="col">pedido_id</th>
            <th scope="col">Cliente</th>
            <th scope="col">fecha_pedido</th>
            <th scope="col">estado</th>
            <th scope="col">plato</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>

        <tbody>
          <?php

          include_once "../Data/Database.php";
          $sql = $conex->query(
          
            "SELECT pedido_id ,nombre,apellido,fecha_pedido, estado, nombre_plato
            FROM pedidos pd 
            INNER JOIN clientes c
            ON pd.cliente_id= c.cliente_id
            INNER JOIN platos pl
            ON pd.plato_id= pl.plato_id"
          
          );

          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <td><?= $datos->pedido_id ?></td>
              <td><?= $datos->nombre." ".$datos->apellido ?></td>
              <td><?= $datos->fecha_pedido ?></td>
              <td><?= $datos->estado ?></td>
              <td><?= $datos->nombre_plato ?></td>
              <td id="accion">
                <a class="btn" id="btnAccion"><i id="lapiz" class="bi bi-pencil-square"></i></a>
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