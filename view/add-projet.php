<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ajouter un projet</title>
	<link rel="stylesheet" href="../css/foundation.css" />
</head>
<body>


	<?php include_once ('menu.php'); ?>

	<form action="../control/add-projet.php" method="post">
		<label for="nom">Nom du projet<input type="text" name="nom" id="nom"></label>
		<label for="type">Type de projet
		    <select name="type" id="type">
		        <option value="website">Website</option>
		        <option value="photography">Photography</option>
		        <option value="animation">Animation</option>
		        <option value="musique">Musique</option>
		        <option value="communication">Communication</option>
		    </select>
		</label>
		<label for="description">Description<textarea name="description" id="description" placeholder="Decrire le projet"></textarea></label>
		<button type="submit" class="button primary">Ajouter</button>
	</form>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>