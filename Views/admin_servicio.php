<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin_servicios</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  
</head>

<body>  
  <!-- Script para que se muestre una elerta antes de eliminar -->
  <script>
    function eliminarPlato() {
      var respuesta = confirm("¿Deseas eliminar este plato?");
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
      include "../Logic/logic_eliminar_serv.php";
      
      if (isset($_GET['status']) && $_GET['status'] == 'success') {
        echo '<div  id= "mensaje" class="alert alert-success">Registro exitoso</div>';
    }
      ?>

      <table class="table">
        <div id="btnPlatos">
          <a href="/Views/registro_servico.php" id="btnNuevoP"><button class="btn btn-primary">Nuevo servicio</button></a>
          <p class="h3 ">servicios</p>
        </div>
        <thead class="encabezados bg-warning">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col" class="col-2">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = $conex->query(
            "SELECT id_servico, nombre, descripción, foto
            FROM servicios "
          );

          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <th><?= $datos->nombre?></th>
              
              <td><textarea class="form-control" id="textarea" rows="1"><?= $datos->descripción ?></textarea></td>
             
              <td >
                <img id="imagen" src="../imagenes/<?=($datos->foto)?>" alt="Error" width="50px" height="50px" >
              </td>

              <td id="accion">
                <!-- El href nos lleva al archivo (modificar_platos.php) con un id especifico (?id=< $datos->plato_id > ) -->
                <a class="btn" id="btnAccion" href="/Views/modificar_platos.php?id=<?= $datos->plato_id ?>"><i id="lapiz" class="bi bi-pencil-square"></i></a>
                <a onclick="return eliminarPlato()" id="btnAccion" href="/Views/admin_servicio.php?id_servico=<?= $datos->id_servico ?>" class="btn"><i id="papel" class="bi bi-trash3"></i></a>
                
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
<script src="../public/js/navAdmin.js"></script>
<?php include_once "../Views/layouts/bootstrap_JS.php"?>

</html>