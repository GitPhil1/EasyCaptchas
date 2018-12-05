<?php
    	
	// Ma clé privée
	$secret = "6LePkn0UAAAAAN0FRHqv4D-03JM353m8FO6LJGpt";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
?>

