<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 

</head>
<body>

<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarContent"
      aria-controls="navbarContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">

        <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
            <img
            src="https://i.pinimg.com/originals/62/9b/80/629b8098f130fdaf061a22bbe9d7d379.png"
            height="45"
            alt="FIFA"
            loading="lazy"
            />
        </a>

        
        <!-- elemento lado izquierdo -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="equipos.php">Equipos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="resultados.php">Resultados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="posiciones.php">Tabla de Posiciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clasificaciones.php">Clasificaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="favoritos.php">Favoritos</a>
            </li>
        </ul>
    </div>

    <!-- elemento lado derecho -->
    <div class="d-flex align-items-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Iniciar Sesión</a>
            </li>
            
        </ul>
    </div>
    
    
  </div>
</nav>

</body>
</html>