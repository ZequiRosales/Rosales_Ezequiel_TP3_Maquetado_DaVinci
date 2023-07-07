<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  $destinatario = 'ezequiel.rosales@davinci.edu.ar';
  $asunto = 'Nuevo mensaje de contacto';

  $contenido = "Nombre: $nombre\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Mensaje: $mensaje\n";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($destinatario, $asunto, $contenido, $headers)) {
    echo 'Mensaje enviado correctamente';
  } else {
    echo 'Error al enviar el mensaje';
  }
}
?>
