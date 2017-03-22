<?php
if (isset($_POST['$pseudo'])) {
	echo "ok";
	$pseudo = htmlspecialchars($_POST['pseudo']);
	if (isset($_POST['$pw'])) {
		echo "alright";
		$pw = htmlspecialchars($_POST['pw']);

		include_once ('inscription-modele.php');
	}
} else {
	echo "mot de passe manquant";
}