<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detalles del plato</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/detalles_plato.css" />
</head>

<body>
  <?php include_once "../Views/layouts/header.php" ?>

  <form method="POST" enctype="multipart/form-data">
    <?php include_once "../Data/Database.php"; ?>


    <?php
    if (!empty($_POST["detalles"])) {
      $plato_id = $_POST["plato_id"];
      $sql = $conex->query("SELECT nombre_plato, descripcion, imagen, precio FROM platos WHERE plato_id = $plato_id");
    
      $datos = $sql->fetch_object()
      //while ($datos = $sql->fetch_object()) { ?>
      <p class="dt-plato"><strong>Detalles del plato</strong></p>
      <hr />
      <div class="card">
        <img id="imagen" src="../imagenes/<?= ($datos->imagen) ?>" class="img-detalle" alt="Error">
        <!--<img src="../img/alternativa.png" class="img-detalle" alt="..." /> -->
        <div class="card-body">
          <p class="card-title"><strong><?= $datos->nombre_plato ?></strong></p>
          <di>
            <p class="tt-descripción">Descripción</p>
            <p><?= $datos->descripcion ?></p>
            <p><strong><?= $datos->precio ?></strong></p>
          </di>
          <div class="cantidad">
            <div class="form-floating mb-3">
              <input
                type="number"
                min="0" pattern="^[0-9]+"
                class="form-control"
                id="input"
                placeholder="Cantidad" />
              <label for="input">Cantidad</label>
            </div>
            <button type="button" class="btn btn-success btn-sm">
              <i class="bi bi-cart4"></i>Agregar
            </button>
          </div>
        </div>
      </div>


    <?php
    }

    ?>


  </form>

  <?php include_once "../Views/layouts/footer.php" ?>
</body>
<script src="../public/js/nav.js"></script>
<?php include_once "../Views/layouts/bootstrap_JS.php" ?>

</html>