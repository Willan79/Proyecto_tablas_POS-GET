<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INICIO</title>

    <?php include_once "./Views/layouts/bootstrap.php"?>

    <link rel="stylesheet" href="/public/css/index.css" />
  </head>
  <body>
    <?php include_once "./Views/layouts/header.php"?> 
    <main class="inicio">
      <h1>BIENVENIDOS A PIJA PARIENTE</h1>
      <p>
        Con Asadero Pija Pariente disfrutas los deliciosos platos de la
        gastronomía llanera.
      </p>
      <a class="btn bg-warning" id="btn-inicio" href="./Views/menu.php">IR A MENU </a>
      <a class="btn bg-warning" id="btn-inicio" href="./Views/?????" role="button"
        >IR A SERVICIOS</a
      >
    </main>
    <?php include_once "./Views/layouts/footer.php"?> 
  </body>
  <script src="./public/js/nav.js"></script>
</html>