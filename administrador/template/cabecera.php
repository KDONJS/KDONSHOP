<?php	

session_start();
if (!isset($_SESSION['usuario'])){

  header("location:../index.php");
}else{

  if ($_SESSION['usuario']=="ok") {
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }

}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb" ?>

        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#">ADMINISTRADOR <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/inicio.php">INICIO</a>
                <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">LBROS</a>
                <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">SALIR</a>
                <a class="nav-item nav-link" href="<?php echo $url; ?>">WEB</a>
            </div>
        </nav>

      <div class="container">
      <br/><br/><br/>
          <div class="row">