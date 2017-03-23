<?php
if (isset($_POST['emailco'])) {
	if (isset($_POST['pwco'])) {
		include_once('./Class/membre_class.php');
		$membre = new Membre();
		$membre->setEmail(htmlspecialchars($_POST['emailco']));
		$membre->setPw(htmlspecialchars($_POST['pwco']));
		$membre->connectMember();
	}
} else {
	echo "identifiant manquants";
}