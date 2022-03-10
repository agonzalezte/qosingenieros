<?php
   //Reseteamos variables a 0.
   $nombre = $apellido = $telefono = $email = $mensaje = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $mensaje = $_POST['mensaje'];
      $para = 'info@qosingenieros.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Apellido" . $apellido;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono" . $telefono;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Su mensaje ha sido enviado, muchas gracias. ¡Pronto nos contactaremos');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('Error al enviar su Mensaje');
         </script>";
    }
  }
?>