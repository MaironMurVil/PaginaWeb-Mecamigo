
<!DOCTYPE html>
<html>
    
<head>
	<title>Funny Games</title>
	<link rel="stylesheet" href="css/mainStyle.css">
	<?php    
 		 include('shared/head.php');
  
	?>

</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="src/img/fg2.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="pag1.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="correo" class="form-control input_user" value="" placeholder="Nombre de usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="clave" class="form-control input_pass" value="" placeholder="Mi contraseña">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" name="btnlogrep" class="btn login_btn">ENTRAR</button>
				</div>
					</form>
				</div>
				
				
				<div class="mt-4">
					<p class="text-white">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
					<div class="d-flex justify-content-center">
						<div class="p-1 mb-3 bg-light rounded">
							<a href="registroFG.php" class="text-decoration-none">REGISTRARSE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
 m