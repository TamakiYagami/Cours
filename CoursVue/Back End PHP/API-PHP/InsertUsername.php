<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
	header('Access-Control-Allow-Origin: *');
	// Autorise l'accés au même origine de l'élément qui l'appel
	header('Access-Control-Allow-Credentials: true');
	// J̈́'autorise les informations d'autorisation
	header('Access-Control-Max-Age: 1000');
	// Je défini le temps que le serveur peux rester connecter
}

echo $_POST['username'];
// echo "Autruche";