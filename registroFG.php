
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/mainStyle.css">
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <div class="p-1 mb-3 bg-light text-dark">
            <h1 class="text-center tit">REGISTRO</h1>
            </div>
            <form action="registro.php" method="post">
                
                <div class="form-group">
                    <label for="username">Nombres:</label>
                    <input name="nombres" type="text" class="form-control" id="username" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <label for="username">Apellidos:</label>
                    <input name="apellidos" type="text" class="form-control" id="username" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input name="correo" type="email" class="form-control" id="email" placeholder="user@gmail.com">
                </div>
                <div class="form-group">
                    <label for="pwd">Contrseña:</label>
                    <input name="clave" type="password" class="form-control" id="pwd" placeholder="*******">
                </div>
               
                <div class="form-group">
                    <label for="username">Nick:</label>
                    <input name="nick" type="text" class="form-control" id="username" placeholder="nick">
                </div>
                <div class="form-group medidas">
                    <button type="submit" class="btn btn-primary btn-lg"  name="btnre" >Registrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>




