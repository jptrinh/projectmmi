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
	
	<ul class="tabs" data-tabs id="identification-tabs">
		<li class="tabs-title is-active"><a href="#connexion" aria-selected="true">Se connecter</a></li>
		<li class="tabs-title"><a href="#inscription">S'inscrire</a></li>
	</ul>

	<div class="tabs-content" data-tabs-content="identification-tabs">
		<div class="tabs-panel is-active" id="connexion">
			<form action="../control/connect.php" method="post">
				<label for="emailco">Email : <input type="email" name="emailco" id="emailco"></label>
				<label for="pwco">Mot de passe : <input type="password" name="pwco" id="pwco"></label>
				<button type="submit" class="button primary">Se connecter</button>
			</form>
		</div>
				

		<div class="tabs-panel" id="inscription">
			<form action="../control/inscription.php" method="post">
				<label for="nom">Nom : <input type="text" name="nom" id="nom" required></label>
				<label for="nom">Prénom : <input type="text" name="prenom" id="prenom" required></label>
				<label for="pw">Mot de passe : <input type="password" name="pw" id="pw" required></label>
				<label for="email">Email : <input type="email" name="email" id="email" required></label>
				<input type="submit" class="button primary" value="S'inscrire"/>
			</form>
		</div>
	</div>
			



	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>