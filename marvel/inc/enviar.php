<?php
    $destino="tochoherencia@gmail.com";
    $name = $_POST["Nombres"];
    $correo = $_POST["Correo"];
    $tema = $_POST["Tema"];
    $mensaje = $_POST["Mensaje"];
    $contenido = "Nombre: " . $name . "\nCorreo:" . $correo . "\nTema:" . $tema . "\nMensaje:" . $mensaje;
    mail($destino, "contacto", $contenido);
    header("Location:sss.html");
?>