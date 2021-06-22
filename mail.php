<?php
if(isset($_POST['email'])) {

$email_to = "ailen-1505@hotmail.com";
$email_subject = "Contacto desde el sitio web";


if(!isset($_POST['name']) ||
!isset($_POST['mail']) ||
!isset($_POST['asunto']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Apellido: " . $_POST['mail'] . "\n";
$email_message .= "E-mail: " . $_POST['asunto'] . "\n";
$email_message .= "Teléfono: " . $_POST['mensaje'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>