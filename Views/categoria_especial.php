<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cayegoría Especial</title>

  <?php include_once "../Views/layouts/bootstrap.php"?>
  <link rel="stylesheet" href="/public/css/categorías.css" />
</head>

<body>
  <?php include_once "../Views/layouts/header.php"?>
  <main class="container">
    <div class="nom-categ">
      <h1>Platillos especiales</h1>
    </div>
    <section class="row">

      <?php include_once "../Data/Database.php"; ?>

      <?php
      $sql = $conex->query(
        
        "SELECT nombre_plato, precio, imagen FROM platos WHERE menu_id = 3"
            
      );

      while ($datos = $sql->fetch_object()) { ?>

        <div class="card col-11 col-sm-5 col-md-5 col-lg-4  col-xl-3">
          <img id="imagen" src="../imagenes/<?=($datos->imagen)?>" class="card-img-top" alt="Error" >
          <p><?= $datos->nombre_plato ?></p>
          <p><?= $datos->precio ?></p>
          <div class="boton">
            <button type="button" class="btn btn-success btn-sm"><i class="bi bi-cart4"></i>Agregar</button>
            <a type="button" class="btn btn-primary btn-sm" href="detalles-plato.html">Detalles</a>
          </div>
        </div>


      <?php
      }
      ?>


    </section>
  </main>

  <?php include_once "../Views/layouts/footer.php"?>
</body>
<script src="../public/js/nav.js"></script>
<?php include_once "../Views/layouts/bootstrap_JS.php"?>

</html>