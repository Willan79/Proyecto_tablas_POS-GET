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
  <?php require_once "../Views/layouts/header.php"?>
  <main class="container">
    <div class="nom-categ">
      <h1>servicios</h1>
    </div>
    <section class="row">

      <?php include_once "../Data/Database.php"; ?>

      <?php
      $sql = $conex->query(
        
        "SELECT nombre, descripción,foto FROM servicios"
            
      );

      while ($datos = $sql->fetch_object()) { ?>

        <div class="card col-11 col-sm-5 col-md-5 col-lg-4  col-xl-3">
          <img id="imagen" src="../imagenes/<?=($datos->foto)?>" class="card-img-top" alt="Error" >
          <p><strong><?= $datos->nombre ?></strong></p>
          <p><?= $datos->descripción ?></p>
          <form action="../Views/datos_servicios.php">
          <div class="boton">
            <button type="sumit" class="btn btn-success btn-sm" data-toggle="tooltip" 
                    data-placement="top" title="deja tus datos para comunicarnos contigo">dejar datos</button>
            </div>
            </form>
          <a  href="tel:+573001234567" role="button">llamanos al: +573216475364</a>
         </div>

        <script>
        // para mostar mensaje al pasar el cursor por el boton "dejar datos"
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

      <?php
      }
      ?>


    </section>
  </main>

  <?php require_once "../Views/layouts/footer.php"?>
</body>
<script src="../public/js/nav.js"></scrip>
<?php include_once "../Views/layouts/bootstrap_JS.php"?>

</html>