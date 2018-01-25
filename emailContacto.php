<?php
	session_start(); 
	$nombre = $_POST ['contact-name'];
	$email = $_POST ['contact-email'];
	$mensaje = $_POST ['contact-message'];


	
		// =========================envio de correo notificandome que alguien se contacto ===================
		$destino ="gustabin@yahoo.com";
		$asunto = "Contacto Web CV - Contactando";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="Hola, alguien te ha contactado por el formulario Web de CV<br><br>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		<b>Nombre: </b>$nombre<br>
		<b>Mensaje:  </b>$mensaje<br>"; //ojo el final de esta linea es importante!!!				
		$yourWebsite = "tabin.life";
		$yourEmail   = "info@tabin.life";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		
		
		mail($destino,$asunto,$cuerpo,$cabeceras);
				
		// ========================envio de correo al empleador ===================
		$destino = $email;
		$asunto = "Thank you for contact to me - Gustavo Arias";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="I am always here!<br><br>
        Hello <b>$nombre</b>,<br>
        Its a pleasure to hear you, soon I´ll contact to you!<br>
        <br><br>
        
        Best Regards.<br>
		
		<p>		
		
		<img src='images/tabin-en-circuloAni.gif' width='84' height='91' />
		<h5>
		Turmero, Estado Aragua, 2115<br>

		<p></p>Designed by Gustavo Arias<br>
		© tabin 2014 - All rights reserved<br></h5>
		</p>";
		
		$yourWebsite = "tabin.life";
		$yourEmail   = "info@tabin.life";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);
		
		$data=array("exito" => '1');
		die(json_encode($data));	

?>