<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = 'contacto@betaurbana.cl';
$asunto = "MENSAJE ENVIADO DESDE LA WEB | BETA URBANA";

$estructura = "<style>
*{margin:0;padding:0;box-sizing:border-box;}
  .contenedor-email{border:1px solid #8a8a8a;padding: 10px;width: 60%; margin: auto;}
  .destacado {background-color: #EBC31E;}
</style>";

$estructura .= "<div class='contenedor-email'>
<header><h3 class='title-email-contenedor'>MENSAJE DESDE LA WEB</h3></header>

<div class='cuerpo-mensaje'>
  <p>Hemos recibido un nuevo mensaje desde nuestra web!. Presta atención a la solicitud para poder satisfacer las necesidades de tus clientes.</p>
  <p>La solicitud fue enviada por <span class='destacado'> " . $nombre . "</span></p>
  <p>Su email es <span class='destacado'> " . $email . "</span> y su número teléfonico es <span class='destacado'> " . $telefono . "</span>.</p>
  <p>y el mensaje enviado dice " . $mensaje . ".</p>
  <p>Ponte en contacto con " . $nombre . " para resolver sus necesidades! <span style='font-size:30px;'>&#128512;</span></p>
</div>  
</div>";


$encabezado = 'Content-type:text/html;charset=UTF-8';
mail($destinatario,$asunto,$estructura,$encabezado);

header('location:/dist/index.html');

?>

