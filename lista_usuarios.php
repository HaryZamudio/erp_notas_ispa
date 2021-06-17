<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once "includes/class_user.php";
    $user_sistema = new Usuario();
    $lista = $user_sistema->listar_usuarios();
    // print_r("<pre>");
    // print_r($lista);
    ?>
    <div class="container mt-3">
        <table class="table border border-danger">
            <thead class="bg-success text-white">
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Nickname</th>
                </tr>
            </thead>
            <tbody>
            <?php
            for ($x=0; $x < sizeof($lista); $x++) { 
                ?>
                <tr>
                    <td><?php echo $lista[$x]['nombre'] ?></td>
                    <td><?php echo $lista[$x]['apellido'] ?></td>
                    <td><?php echo $lista[$x]['correo'] ?></td>
                    <td><?php echo $lista[$x]['nickname'] ?></td>
                </tr>
                <?php
            }    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>