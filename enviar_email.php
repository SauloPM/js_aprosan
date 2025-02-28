<?php

// Almacenamos los datos del formulario en variables
$to      = "comercial@aprosan.es";
$from    = $_POST['email'  ];
$name    = $_POST['nombre' ];
$subject = $_POST['asunto' ];
$message = $_POST['mensaje'];

$message = "
<html>
	<head>
		<title>Aprosán</title>
	</head>
	<body>
		<header>
			<p>Mensaje enviado por " . $name . "</p>
		</header>
		<hr>
		<p>" . $message . "</p>
		<hr>
		<footer>
			<p>Este mensaje ha sido enviado desde el formulario de contacto de la página web oficial de <i>Patricia Poveda Montesdeoca</i></p>
		</footer>
	</body>
</html>
";

// Cabecera para el envío de mensajes en formato HTML
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Cabeceras adicionales
$headers .= 'From: <' . $from . '>' . "\r\n";

// Enviamos el mensaje
$envio = mail($to, $subject, $message, $headers);

if ( $envio ) {
	echo "<p>Operación completada con éxito. Volver a la <a href='index.html' title='Página de inicio'>página de inicio</a></p>";
}
else {
	echo "Se ha producido un error. Por favor, vuelva a intentarlo más tarde";
}

?>