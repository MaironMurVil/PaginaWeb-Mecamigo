   <?php    
   include('../../shared/head.php');
   ?>
     <link rel="stylesheet" href="../shared/css/mainGames.css">
     <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/04cfd823429f9d23bbb0a65451607432.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/ea2742e4ea3f89ca6a0c31ad6e68252b.json", {onProgress: UnityProgress});
    </script>
   
  </head>
  <body>
    <?php include('../shared/sideBar.php'); ?>
   
    <!-- Juego SpaceWar-->
    <div class="webgl-content gameBox">
      <div id="gameContainer"  style="width: 800px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo "></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title ">SpaceWars</div>
      </div>
    </div>
  

    <!-- Targetas -->
    <div class="row targeta cardBoxes">
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo rounded">
            <img src="../shared/img/juegos.png" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Nuevos Juegos!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo1 rounded">
            <img src="../shared/img/logro.jpg" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Mis logros!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="colfondo2 rounded">
            <img src="../shared/img/gema.png" class="mx-auto d-block">
            <hr>
            <h3 class="text-center">¡Obtener más gemas!</h3>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aquí</a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>