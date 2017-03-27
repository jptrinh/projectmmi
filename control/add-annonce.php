<?php
session_start();
if (isset($_POST['poste'])) {
    if (isset($_POST['projet'])) {
        if (isset($_POST['description'])) {
            require('../Class/annonce_class.php');
            $annonce = new Annonce();
            $annonce->setPoste($_POST['poste']);
            $annonce->setProjet($_POST{'projet'});
            $annonce->setChef($_SESSION['email']);
            $annonce->setPublication(date('Y-m-d'));
            $annonce->setDescription($_POST['description']);
            $annonce->insertAnnonce();
            header('Location:annonces.php');
            
        } else {
            echo "eurreur descr";
        }
    } else {
        echo "erruer projet";
    }
} else {
    echo "erruer poste";
}