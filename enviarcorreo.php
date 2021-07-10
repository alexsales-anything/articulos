<?php //Recepción de datos
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$correo=$_POST['correo']; $asunto=$_POST['asunto'];
$consulta=$_POST['consulta'];
// Fin de recpcion de datos
// Acción de envío
//---------//
$receptor='AQUÍ TU E-MAIL';
$mensaje='
Mensaje de:
'.$apellido.', '.$nombre.'
Correo:
'.$correo.'
Asunto:
'.$asunto.'
Consulta:
'.$consulta.'
';
$desde='From: '.$correo.' <AQUÍ TU E-MAIL>';
ini_set(sendmail_from,'AQUÍ TU E-MAIL');
mail($receptor,$asunto,$mensaje,$desde);
echo'Mensaje enviado con éxito, muchas gracias';
?>