<?php
if (isset($_POST['nom'])) {
	if (isset($_POST['prenom'])) {
		if (isset($_POST['pw'])) {
			if (isset($_POST{'email'})) {
				include_once ('../Class/membre_class.php');
				$member = new Membre();
				if ($member->verifEmail($_POST['email'])) {
					$member->setNom($_POST['nom']);
					$member->setPrenom($_POST['prenom']);
					$member->setPw($_POST['pw']);
					$member->setEmail($_POST['email']);
                    $member->setIut($_POST['iut']);
					$member->insertDB();
					header('Location: ../view/index.php');
				} else {
					echo 'Mail déjà utilisé';
				}
				
			}
		}
	}
}