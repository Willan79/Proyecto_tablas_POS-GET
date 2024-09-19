<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel Admin</title>

    <?php include_once "../Views/layouts/bootstrap.php"?>
    <link rel="stylesheet" href="../public/css/panel-admin.css" />
  </head>
  <body>
    <main class="panel">
      
      <section class="cuerpo">
        <h3 class="bg-warning" id="hea">
          <p>Panel administrativo </p>
        </h3>
        <div class="row">
          <div class="card col-11 col-sm-4 col-lg-2 bg-success">
            <a href="/Views/admin_pedidos.php"><strong>Pedidos</strong></a>
            <div>
              <i class="bi bi-bar-chart-line"></i>
              <span>#00</span>
            </div>
          </div>
          <div class="card col-11 col-sm-4 col-lg-2 bg-primary">
            <a href="/Views/admin_platos.php"><strong>Platos</strong></a>
            <div>
              <i class="bi bi-bar-chart-line"></i>
              <span>#00</span>
            </div>
          </div>
          <div class="card col-11 col-sm-4 col-lg-2 bg-warning">
            <a href="/Views/admin_usuarios.php"><strong>Usuarios</strong></a>
            <div>
              <i class="bi bi-bar-chart-line"></i>
              <span>#00</span>
            </div>
          </div>
          <div class="card col-11 col-sm-4 col-lg-2 bg-info">
            <a href="../Views/admin_servicio.php"><strong>Servicios</strong></a>
            <div>
              <i class="bi bi-bar-chart-line"></i>
              <span>#00</span>
            </div>
          </div>
        </div>

        <div class="img-panel">
          <img src="/public/img/img.panel.png" class="card-img-top" alt="..."/>
        </div>  
      </section>
    </main>
  </body>
  <script src="../JavaS/admin.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>