<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Platos</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/tablas.css" />
</head>

<body>

  <!-- Script para que se muestre una elerta antes de eliminar -->
  <script>
    function elimina() {
      var respuesta = confirm("¿Deseas eliminar el plato?");
      return respuesta;
    }
  </script>

  <main class="panel">

    <section class="lateral bg-warning">
      <div class="div-logo">
        <img class="logo" src="../public/img/LG-022.png" />
      </div>

      <a href="/Views/panel_admin.php"><i class="bi bi-bar-chart"></i>Panel</a>
      <a href="/Views/admin_pedidos.php"><i class="bi bi-bell-fill"></i>Pedidos</a>
      <a><i class="bi bi-duffle"></i>Platos</p>
      <a href="/Views/admin_usuarios.php"><i class="bi bi-people-fill"></i> Usuarios</a>

    </section>

    <section class="cuerpo">
      <div class="bg-warning" id="superior">
        <button class="nav-burger2"><i class="bi bi-list"></i></button>
        <h3>Panel administrativo</h3>
      </div>

      <?php
      include_once "../Data/Database.php";
      include "../Logic/logic_eliminar_plato.php";
      ?>

      <table class="table">
        <div id="btnPlatos">
          <a href="/Views/registro_platos.php" id="btnNuevoP"><button class="btn btn-primary">Nuevo plato</button></a>
          <p class="h3 ">Platos</p>
        </div>
        <thead class="encabezados bg-warning">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoría</th>
            <th scope="col">Nombre</th>
            <th scope="col" class="col-2">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio</th>
            <th scope="col">Disponible</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = $conex->query(
            "SELECT plato_id,  categorías, nombre_plato, descripcion, imagen, precio, cantidad 
            FROM platos p 
            INNER JOIN menu m
            ON p.menu_id= m.menu_id"
          );

          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <td><?= $datos->plato_id ?></td>
              <td><?= $datos->categorías ?></td>
              <td><?= $datos->nombre_plato ?></td>
              <td><textarea class="form-control" id="textarea" rows="1"><?= $datos->descripcion ?></textarea></td>
              <td>
              <img id="imagen" src="data:image/jpg;base64,<?= base64_encode($datos->imagen)?>" alt="..." >
              </td>
              
              <td><?= $datos->precio ?></td>
              <td><?= $datos->cantidad ?></td>
              <td id="accion">

                <!-- El href nos lleva al archivo (modificar_platos.php) con un id especifico (?id=< $datos->plato_id > ) -->
                <a class="btn" id="btnAccion" href="/Views/modificar_platos.php?id=<?= $datos->plato_id ?>"><i id="lapiz" class="bi bi-pencil-square"></i></a>
                <a class="btn" herf="../public/imagenes/9.png" onclick="elimina()" id="btnAccion" href="/Views/admin_platos.php?id=<?= $datos->plato_id ?>"><i id="papel" class="bi bi-trash3"></i></a>
                
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
  crossorigin="anonymous">
</script>

</html>