<!doctype html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Mis arreglitos pequeños de CSS -->
    <link rel="stylesheet" href="css/mainStyle.css">


    <!-- Carrusel CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  
    <title>Funny Games</title>
    <link rel="stylesheet" href="../css/mainStyle.css">
    <!-- Plantilla -->
    <link href="css/stylePlantilla.css" rel="stylesheet">
    <link href="css/P_bootstrap.min.css" rel="stylesheet">
    <script src="js/P_custom.min.js"></script>
    <link href="css/P_perfect-scrollbar.css" rel="stylesheet">
  </head>
  <body>
  <header class="topbar"> <!-- <-------- PLANTILLA  ***************** -->
  <nav class="navbar navbar-expand-lg navbar-light container">
      
      <!--LOGO-->
      <a class="navbar-brand" href="index.php">
        <img src="src/img/fg2.png" class="fg">
      </a>
      
      <!-- Buscador -->
      <div class="collapse navbar-collapse">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="¿Qué quieres buscar?" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-light" type="button"><img src="src/img/lupa.png"></button>
          </div>
        </div> 
      </div>

      <!--diamante-->
      <img src="src/img/coin.png" class="profile-pic" ><p> 199 </p>

  <!--PLANTILLA - perfil ***************** -->

  <ul class="navbar-nav my-lg-0">
                    
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="src/img/perfil.gif" alt="user" class="profile-pic"></a>
              <div class="dropdown-menu dropdown-menu-right animated flipInY">
                  <ul class="dropdown-user">
                      <li>
                          <div class="dw-user-box">
                              <div class="u-img"><img src="src/img/perfil.gif" alt="user"></div>
                              <div class="u-text">
                                  <h4>Daniel Velasquez</h4>
                                  <p class="text-muted">gorsitho@gmail.com</p><a href="perfil.php" class="btn btn-rounded btn-danger btn-sm">Perfil</a></div>
                          </div>
                      </li>

                      <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
              </div>
          </li>
      </ul>
    </nav>
</header>
    <!-- Menú -->
    <div class="rounded-pill bg-dark container">
      <ul class="nav justify-content-center">
      	<li class="nav-item">
        	<a class="nav-link text-white font-weight-bolder" href="juegos.php">JUEGOS</a>
        </li>
        <li class="nav-item">
          	<a class="nav-link text-white font-weight-bolder" href="logros.php">LOGROS</a>
        </li>
        <li class="nav-item">
          	<a class="nav-link text-white font-weight-bolder" href="http://www.rivedaleconsulting.com/_/rsrc/1468742830501/home/pagina-web-construccion.jpg">TIENDA</a>
        </li>
        <li class="nav-item">
          	<a class="nav-link text-white font-weight-bolder" href="info.php">INFORMACIÓN</a>
        </li>
      </ul>
    </div>

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