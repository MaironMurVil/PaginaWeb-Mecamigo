<!doctype html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Mis arreglitos pequeños de CSS -->
    <link rel="stylesheet" href="css/busca.css">

    <!-- Carrusel CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>MECAMIGO</title>

  </head>
  <body background="img/fondo.jpg">

  <nav class="navbar navbar-expand-lg navbar-light container">
      
      <!--LOGO-->
      <a class="navbar-brand" href="index2.html">
        <img src="img/fg2.png" class="fg">
      </a>
      
      <!-- Buscador -->
      <div class="collapse navbar-collapse">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="¿Qué quieres buscar?" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-light" type="button"><img src="img/lupa.png"></button>
          </div>
        </div> 
      </div>

      <!--diamante-->
      <img src="img/coin.png" class="icono"><p>199</p>

      <!-- Perfil -->
      <img src="img/perfil.gif" class="icono"><p>Gorshito</p>      

    </nav>

    <!-- Menú -->
    <div class="rounded-pill bg-dark container">
      <ul class="nav justify-content-center">
        <li class="nav-item" onclick="location='http://localhost/mecamigo/PaginaWeb-Mecamigo/paginas/juegosPag.php'"  >
          <a class="nav-link active text-white font-weight-bolder" href="#">JUEGOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bolder" href="#">LOGROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bolder" href="#">TIENDA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bolder" href="#">INFORMACIÓN</a>
        </li>
      </ul>
    </div>

    <!-- Carrusel -->
    <div class="container" style="margin-top: 40px; width: 900px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          <h5 class="alert-info">CONOCE A MECAMIGO</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="alert-info">SU ESTRUCTURA</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
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
            <img src="img/juegos.png" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Nuevos Juegos!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo1 rounded">
            <img src="img/logro.jpg" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Mis logros!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo2 rounded">
            <img src="img/gema.png" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Obtener más gemas!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
</html>