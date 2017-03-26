<?php
session_start();
if(isset($_POST['nom'])) {
    if(isset($_POST['description'])) {
        include_once ('../Class/projet_class.php');
        $projet = new Projet();
        $projet->setNom($_POST['nom']);
        $projet->setDescription($_POST['description']);
        $projet->setChef($_SESSION['email']);
        $projet->insertProjet();
        header('Location:./profil.php');
    }
}
