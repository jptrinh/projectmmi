<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$result = $bdd->prepare('SELECT * FROM projets WHERE chef = :chef');
$result->execute(array(
    'chef' => $_SESSION['email']));

while ($donnees = $result->fetch()) {
    echo $donnees['nom'] . ' ' . $donnees['description'];
}

