<?php    
  include('shared/head.php');
  include('shared/sideBar.php');
?>


  <?php
  if (isset($_SESSION['correo'])){
  
  
  ?>

<link rel="stylesheet" href="css/mainStyle.css">

  </head>
  <body>


    <div class="d-flex justify-content-center targeta">
      <div class="p-1 mb-3  rounded">
        <p class="h1">!METAS SUPERADAS¡</p>
      </div>
    </div>

    <!--TARJETA 1-->
    <div class="container"><!--Contenedor, da margen y orden-->
    <div class="row"> <!--Fila, se activa la etiqueta "col-sm" para organizar n tarjetas/cuadros en una fila-->
      <div class="col-sm-4"><!--col-sm, el numero 4 (4/12) determina el tamaño de la tarjeta/cuadro -->
        <div class="card text-center"><!--card, color de fondo - testo centrado -->
          <img class="card-img-top" src="src/img/logro.jpg">
          <div class="card-body">
          <p class="card-text font-weight-bold">PRIMER LOGRO</p>
          <p class="card-text">Crear mi cuenta</p>
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