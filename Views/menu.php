
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MENÚ</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="../public/css/menu.css" />
</head>

<body>
  <?php include_once "../Views/layouts/header.php" ?>
  <main class="container">
    <div class="menu-catg">
      <h1>Categorías</h1>
    </div>

    <section class="row">
      <div class="card col-11 col-sm-4 col-lg-3">
        <img src="../public/img/a-02.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="/Views/categoria_corriente.php" class="card-title"><strong>Corriente</strong></a>
          <p class="descrip"> Estos platos reflejan la esencia auténtica de la cocina llanera, con sabores tradicionales que satisfacen los antojos más arraigados.</p>
        </div>
      </div>

      <div class="card col-11 col-sm-4 col-lg-3">
        <img src="../public/img/a-01.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="/Views/categoria_ejecutivo.php" class="card-title"><strong>Ejecutivo</strong></h4></a>
          <p class="descrip">Pija pariente eleva la experiencia con cortes selectos de carne, preparados con técnicas tradicionales</p>
        </div>
      </div>
      <div class="card col-11 col-sm-4 col-lg-3">
        <img src="../public/img/a-04.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="/Views/categoria_especial.php" class="card-title"><strong>Especial</strong></a>
          <p class="descrip"> Estos platos están diseñados para aquellos que buscan una experiencia culinaria única y memorable en el contexto del asado llanero.</p>
        </div>
      </div>
    </section>
  </main>
  <?php include_once "../Views/layouts/footer.php" ?>
</body>
<script src="../public/js/nav.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

</html>