<?php
   session_start();
   $user = $_REQUEST['user'];
   $password = $_REQUEST['password'];

   $_SESSION['nomUsuario'] = $user;

   //usuarios
   $usuario1 = "admin";
   $contra1 = "admin";
   $usuario2 = "secre";
   $contra2 = "secre";


   if ($user == $usuario1 AND $password == $contra1  OR $user == $usuario2 AND $password == $contra2) {         
         if ($user == 'admin') {
            header("location:admin.php");
         }else {
            header("location:secretaria.php");
         }
         
   }else {
    echo "¡Usuario o contraseña incorrectos!";
    echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?>