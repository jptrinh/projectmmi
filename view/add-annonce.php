<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>project mmi</title>
	<link rel="stylesheet" href="../css/foundation.css" />
</head>
<body>
	<?php include_once('menu.php');?>
<h1>Annonces</h1>

<form action="../control/add-annonce.php" method="post">
    <label for="poste">Choisir un poste
        <select name="poste" id="poste">
            <option value="webdesigner">Webdesigner</option>
            <option value="photographe">Photographe</option>
            <option value="monteur">Monteur</option>
            <option value="animateur">Animateur</option>
            <option value="programmeur">Programmeur</option>
            <option value="designergraphique">Designer Graphique</option>
        </select>
    </label>
    
    <?php require_once("../model/liste-projet.php")?>
    <label for="projet">Choisir un projet
        <select name="projet" id="projet">
            <?php while ($donnees = $result->fetch()):?>
            <option value="<?=$donnees['nom']?>"><?=$donnees['nom']?></option>
            <?php endwhile ?>
        </select>
    </label>
    
    <label for="description">Description du poste
        <input type="text" name="description" id="description">
    </label>
    <button type="submit" class="button primary">Envoyer</button>
    
</form>		



	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>
