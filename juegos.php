<?php    
  include('shared/head.php');
  include('shared/sideBar.php');
?>

  
  <?php
  if (isset($_SESSION['correo'])){
  
  
  ?>



  </head>
  <body>


    <div class="d-flex justify-content-center targeta">
      <div class="p-1 mb-3 rounded">
        <p class="h1">!VAMOS A JUGAR¡</p>
      </div>
    </div>

    <!--TARJETA 1-->
    <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card text-center">
          <img class="card-img-top" src="src/img/spacewar.png">
          <div class="card-body">
          <p class="card-title">Space War</p>
          <a href="games/spacewar/spacewar.php" class="btn btn-primary">Jugar!</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
          <div class="card text-center">
            <img class="card-img-top" src="src/img/juego1.png">
            <div class="card-body">
            <p class="card-title">JUEGO 2</p>
            <a href="#" class="btn btn-primary">Jugar!</a>
          </div>
        </div>
      </div>
    </div>
    </div>

  </body>
</html>



<?php
}
else{

	header('Location: login.php');
}

?>