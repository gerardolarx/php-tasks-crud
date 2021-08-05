<?php

session_start();

$conn = mysqli_connect(
    'localhost', //donde esta el servidor de la base de datos
    'root', //usuario
    '1234', //contraseña 
    'crud' //base de datos
);

//comprobar conexion
if (isset($conn)) {
    //echo 'DB is connected';
}

?>