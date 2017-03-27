<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$result = $bdd->prepare("SELECT * FROM iut");
$result->execute();