<!--Les paramètres doivent être passés dans l'URL de la façon suivante-->

<a href="https://www.google.com/recaptcha/api/siteverify?secret=your_secret&response=response_string&remoteip=user_ip_address">https://www.google.com/recaptcha/api/siteverify?secret=your_secret&response=response_string&remoteip=user_ip_address</a>

<!--On dynamise tout ça-->
<?php
    	
	// Ma clé privée
	$secret = "6LeuNQITAAAAAHwUcbXbyFCUudJKRAjcgNRwlaoE";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];

	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
		
?>