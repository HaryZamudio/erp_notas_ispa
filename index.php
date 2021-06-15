<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form method="POST" action="procesos/form_registro_user.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombres</label>
            <input type="text" class="form-control" name="nombre_user" id="nombre_user" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">Apellidos</label>
            <input type="text" class="form-control" name="apellidos_user"id="apellidos_user" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">Correo</label>
            <input type="text" class="form-control" name="correo_user" id="correo_user" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass_user" id="pass_user">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="assets/bootstrap-4.6.0-dist/js/bootstrap.min.js">  

</body>
</html>