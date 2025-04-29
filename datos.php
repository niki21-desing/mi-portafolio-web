<?php
if 
($_SERVER {"REQUEST_METHOD"}=="POST"){
    $nombre = htmlspecialchars($_POST[nombre]);
    $apellido = htmlspecialchars($_POST[apellido]);
    $correo = htmlspecialchars($_POST[correo]);
    $telefono = htmlspecialchars($_POST[telefono]);
    $mensaje = htmlspecialchars($_POST[mensaje]);

    echo "¡Gracias $nombre, por tú mensaje!";
}
?>