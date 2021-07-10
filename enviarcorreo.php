<?php //Recepción de datos
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$correo=$_POST['correo']; $asunto=$_POST['asunto'];
$consulta=$_POST['consulta'];
// Fin de recpcion de datos
// Acción de envío
//---------//
$receptor='alexusame@gmail.com';
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
$desde='From: '.$correo.' <alexusame@gmail.com>';
ini_set(sendmail_from,'alexusame@gmail.com');
mail($receptor,$asunto,$mensaje,$desde);
echo'Mensaje enviado con éxito, muchas gracias';
?>