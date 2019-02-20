
    <?php    
  include('shared/head.php');
?>

  <?php
  if (isset($_SESSION['correo'])){
  
  
  ?>

   
    <!-- Mis arreglitos pequeños de CSS -->
    <link rel="stylesheet" href="css/mainStyle.css">

    <title>Funny Games</title>
    <link rel="stylesheet" href="../css/mainStyle.css">
   
  </head>
  <body>
  <?php    
  
  include('shared/sideBar.php');
    ?>


    <!-- Carrusel -->
    <div class="container" style="margin-top: 40px; width: 900px;"> <!-- NO PUDE QUITAR ESTE CSS, lo q hace es centrar el carrucel, pero ya lo intente con clase, id y nada -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="src/img/1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          <h5 class="alert-info">CONOCE A MECAMIGO</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="src/img/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="alert-info">SU ESTRUCTURA</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="src/img/3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="alert-info">SU FUTURO</h5>
        </div>
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previo</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
    </div>

    <!-- Targetas -->
    <div class="row targeta">
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo rounded">
            <img src="src/img/juegos.png" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Nuevos Juegos!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo1 rounded">
            <img src="src/img/logro.jpg" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Mis logros!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo2 rounded">
            <img src="src/img/gema.png" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Obtener más gemas!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="js/P_jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="js/P_popper.min.js"></script>
     <!-- slimscrollbar scrollbar JavaScript -->
     <script src="js/P_perfect-scrollbar.jquery.min.js"></script>
  </body>
</html>


<?php
}
else{

	header('Location: login.php');
}

?>