<!doctype html>
<html lang="es">

<head>
    <title>Ejemplo Tema4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<?php
if(!isset($_SERVER['PHP_AUTH_USER'])){
    header ('www-Autenticate: Basic Realm="Contendio restingido"');
    header ('HTTP/1.0 401 Unauthorized');
    echo("Usuario no válido");
    exit;
}
?>




<body style="background-color: gray">
<div class="container mt-3">
    <div class="card text-white bg-primary mb-3 m-auto" style="max-width: 22rem;">
        <div class="card-header font-weight-bold text-center">PHP_AUTH</div>
        <div class="card-body" style="font-size:1.2em">
            <p class="card-text"><span class="font-weight-bold">Usuario :</span>
            "<?php echo $_SERVER['PHP_AUTH_USER'] ?>"</p>
            <p class="card-text"><span class="font-weight-bold">Contraseña :</span>
            "<?php echo $_SERVER['PHP_AUTH_PW']?>"</p>
            <p class="card-text"><span class="font-weight-bold">Método de Autentificacion :</span>
            "<?php echo $_SERVER['AUTH_TYPE']?>"</p>
        </div>
    

</div>

</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>