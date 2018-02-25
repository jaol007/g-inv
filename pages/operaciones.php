<!DOCTYPE html>
<html lang="es">
<head>
  <title>G-Inv - Operaciones Matemáticas</title>
  <meta charset="utf-8">
  <meta description="UNAD Gestión de inventarios - Grupo 19">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" >
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/css.css">
  <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="../js/popper.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="../index.html"><i class="fab fa-earlybirds fa-2x"></i></a>
  <a class="navbar-brand" href="../index.html">G-Inv</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i> Administrador</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tags" aria-hidden="true"></i> Productos</a>
        <!-- Submenu -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Ingreso de Productos</a>
          <a class="dropdown-item" href="#">Consulta de Productos</a>
          <a class="dropdown-item" href="#">Actualización de Productos</a>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i> Reportes</a></li>
      <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-superscript" aria-hidden="true"></i> Operaciones Matemáticas</a></li>
    </ul>
  </div>
</nav>


<div class="container">
  <h2>Formulario para realizar una suma</h2>

  <form class="form-horizontal" role="form" method="POST">
    <div class="input">
      <label>Número A:</label>
      <input type="text" class="form-control"  name="a" placeholder="Ingrese el numero A">
    </div>

    <div class="input">
      <label>Número B:</label>
      <input type="text" class="form-control" name="b" placeholder="Ingrese el número B">
    </div>
    <div>
      <label>Seleccione una Operación:</label>
        <fieldset>
          <div class="checkbox">
              <p><input type="checkbox" name="operacion" value="suma"> Suma</p>
          </div>
          <div class="checkbox">
              <p><input type="checkbox" name="operacion" value="resta"> Resta</p>
          </div>
          <div class="checkbox">
              <p><input type="checkbox" name="operacion" value="multi"> Multiplicación</p>
          </div>
          <div class="checkbox">
              <p><input type="checkbox" name="operacion" value="div"> División</p>
          </div>
        </fieldset>
    </div>

      <button type="submit" name="submit" class="btn btn-primary">Calcular</button>
  </form>


<?php
$a = $_POST['a'];
$b = $_POST['b'];
?>


<?php
$s=$a+$b;
echo "La suma es ".$s;
?>

</div>

</body>
</html>
