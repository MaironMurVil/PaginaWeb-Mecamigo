<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <div class="p-1 mb-3 bg-light text-dark">
            <h1 class="text-center tit">REGISTRO</h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="username">Nombre de Usuario:</label>
                    <input type="text" class="form-control" id="username" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" class="form-control" id="email" placeholder="user@mail.com">
                </div>
                <div class="form-group">
                    <label for="pwd">Contrseña:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="*******">
                </div>
                <label>Fecha de nacimiento:</label>
                <div class="form-group row">                   
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Dia">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Mes">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Año">
                    </div>
                </div>
                <div class="form-group medidas">
                    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
