<?php
    $destino="relacionesnacionaleseinternacionales
    @unprg.edu.pe";
    $nombres= $_POST["nombre_apellido"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $asunto=$_POST["asunto"];

    $contenido = "Nombre: " . $nombres . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto;

    mail($destino,$asunto,$contenido);

    header("Location:gracias.html");


?>