<!-- Une fois toutes ces formalités réglées, on doit se préparer à recevoir une réponse de l'API en JSON. Un simple json_decode() devrait suffire à interpréter cette réponse-->

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
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] == true) {
		// C'est un humain
	}
	
	else {
		// C'est un robot ou le code de vérification est incorrecte
	}
		
?>