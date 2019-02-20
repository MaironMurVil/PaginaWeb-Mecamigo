

<header class="topbar"> <!-- <-------- PLANTILLA  ***************** -->
  <nav class="navbar navbar-expand-lg navbar-light container">
      
      <!--LOGO-->
      <a class="navbar-brand" href="index.php">
        <img src="../src/img/fg2.png" class="fg">
      </a>
      
      <!-- Buscador -->
      <div class="collapse navbar-collapse">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="¿Qué quieres buscar?" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-light" type="button"><img src="../src/img/lupa.png"></button>
          </div>
        </div> 
      </div>

      <!--diamante-->
      <img src="../src/img/coin.png" class="profile-pic" ><p> <?php echo $_SESSION['gemas'];?> </p>

  <!--PLANTILLA - perfil ***************** -->

  <ul class="navbar-nav my-lg-0">
                    
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../src/img/perfil.gif" alt="user" class="profile-pic"></a>
              <form action="../shared/closeSesion.php" method="post">
              <div class="dropdown-menu dropdown-menu-right animated flipInY">
                  <ul class="dropdown-user">
                      <li>
                          <div class="dw-user-box">
                              <div class="u-img"><img src="../src/img/perfil.gif" alt="user"></div>
                              <div class="u-text">
                                  <h4><?php echo $_SESSION['nick'];?></h4>
                                  <p class="text-muted"><?php echo $_SESSION['correo'];?></p><a href="perfil.php" class="btn btn-rounded btn-danger btn-sm">Perfil</a></div>
                          </div>
                      </li>
                     
                      <li ><button type="submit"  name="cerrarSession" class=" btn-info btn-md "><i class="fa fa-power-off"></i> Logout</button></li>
                     
                  </ul>
              </div>
              </form>
          </li>
      </ul>
    </nav>
</header>
 

    <!-- Menú -->
    <div class="rounded-pill bg-dark container">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bolder" href="../../juegos.php">JUEGOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bolder" href="../../logros.php">LOGROS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bolder" href="../../tienda.php">TIENDA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bolder" href="../../info.php">INFORMACIÓN</a>
        </li>
      </ul>
    </div>