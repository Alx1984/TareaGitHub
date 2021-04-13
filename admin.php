<?php
    session_start();
    $nom= $_SESSION['nomUsuario'];

    echo "<h1>Bienvenido: $nom</h1>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Configuraciones</a></li>
        <li><a href="#">Actividades</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Enlaces</a></li>        
    </ul>
</nav>   
</body>
</html>