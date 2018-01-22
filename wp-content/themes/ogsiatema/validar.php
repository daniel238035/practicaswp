<!--?php 
    $destino="relacionesnacionaleseinternacionales@unprg.edu.pe";
    $nombres = $_POST["nombre_apellido"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["asunto"];

    $contenido = "Nombre: " . $nombres . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

    mail($destino,"Contácto desde nuestra Web",$contenido);

    header("Location:gracias.php");


?-->

