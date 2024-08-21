<?php
	$sendTo = "contacto.eton@etoninstitute.com.ar";
	$sendTo2 = "discalzi.florencia@etoninstitute.com.ar";
	$subject = $_POST["asunto"];
	$headers = "From: " . $_POST["Cristalab_Flashform"];
	$headers .= "<" . $_POST["email"] . ">\r\n";
	$headers .= "Reply-To: " . $_POST["email"]; 
	
	$message = "------------------------------------------------------------------------------ \n";
	$message .= "Mensaje recibido de la web: www.etoninstitute.com.ar \n";
	$message .= "------------------------------------------------------------------------------ \n";
	$message .= "Nombre: ".$_POST['nombre']."\n";
	$message .= "Teléfono: ".$_POST['tel']."\n";
	$message .= "Ciudad: ".$_POST['ciudad']."\n";
	$message .= "email: ".$_POST['email']."\n";
	$message .= "Mensaje: ".$_POST["mensaje"]."\n";
	$message .= "------------------------------------------------------------------------------ \n";
	mail($sendTo, $subject, $message, $headers);
	mail($sendTo2, $subject, $message, $headers);
	echo "estado=Mensaje enviado :D";
?>
