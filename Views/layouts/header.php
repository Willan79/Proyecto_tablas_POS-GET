<!-- Header -->
<?php session_start(); ?>
<link rel="stylesheet" href="/public/css/header.css" />

<header class="header bg-warning">
  <nav class="nav">

    <img class="nav-logo" src="/public/img/Pija-01.png" />

    <div id="nombreInicio">
      <?="Hola, " . $_SESSION["nombre"] . " " . $_SESSION["apellido"]; ?>
    </div>
    <button class="nav-burger">
      <i class="bi bi-list"></i>
    </button>
    
    <ul class="nav-menu">
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Views/menu.php">Menú</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Views/cliente_servicio.php">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Views/login.php"><i class="bi bi-person-fill"></i>Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link position-relative" href="carrito.php"><i class="bi bi-cart-fill">
            <span
              class="position-absolute top-0 start-95 translate-middle badge rounded-pill bg-danger">
              4+
              <span class="visually-hidden">unread messages</span>
            </span>
          </i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Logic/Logic_cerrar_login.php">Salir</a>
      </li>
    </ul>
  </nav>
</header>