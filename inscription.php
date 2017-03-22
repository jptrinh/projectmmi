<?php
if (isset($_POST['nom'])) {
	if (isset($_POST['pw'])) {
		if (isset($_POST{'email'})) {
			include_once ('./Class/membre_class.php');
			//include_once('bd-connect.php');
			$member = new Membre();
			$member->setNom($_POST['nom']);
			$member->setPw($_POST['pw']);
			$member->setEmail($_POST['email']);
			$member->insertDB();

		};
	};
};