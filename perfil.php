<?php    
  include('shared/head.php');
?>

  </head>

   
   <?php
  if (isset($_SESSION['correo'])){
  
  
  ?>
  <body>

  <?php    
   include('shared/sideBar.php');
  ?>

  

    <div class="d-flex justify-content-center targeta">
      <div class="p-1 mb-3 bg-light rounded">
        <p class="h1">MI PERFIL DE FUNNY GAMES</p>
      </div>
    </div>

    <div class="container">
      <div class="form-group row">
        <div class="col-sm-2">
          <div class="p-1 mb-3 bg-info text-white rounded">
            <h1 for="staticEmail" class="col-form-label text-center"">NOMBRE:</h1>
          </div>
        </div>
        <div class="col-sm-10">
          <input class="form-control form-control-lg" type="text" placeholder="<?php echo $_SESSION['nombres'];?>" readonly>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="form-group row">
        <div class="col-sm-2">
          <div class="p-1 mb-3 bg-info text-white rounded">
            <h1 for="staticEmail" class="col-form-label text-center"">APELLIDOS:</h1>
          </div>
        </div>
        <div class="col-sm-10">
          <input class="form-control form-control-lg" type="text" placeholder="<?php echo $_SESSION['apellidos'];?>" readonly>
        </div>
      </div>
    </div>

        <div class="container">
      <div class="form-group row">
        <div class="col-sm-2">
          <div class="p-1 mb-3 bg-info text-white rounded">
            <h1 for="staticEmail" class="col-form-label text-center"">NICK:</h1>
          </div>
        </div>
        <div class="col-sm-10">
          <input class="form-control form-control-lg" type="text" placeholder="<?php echo $_SESSION['nick'];?>" readonly>
        </div>
      </div>
    </div>

    <div class="text-center">
      <img src="src/img/perfil.gif" class="rounded">
    </div>

  </body>
</html>




<?php
}
else{

	header('Location: login.php');
}

?>