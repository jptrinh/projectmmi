<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>project mmi</title>
	<link rel="stylesheet" href="css/foundation.css" />
</head>
<body>
	
	<div class="row">
		<div class="medium-6 columns">
			<h2>Se connecter</h2>
			<form action="connect.php" method="post">
					<label for="pseudo">Pseudo : <input type="text" name="pseudo" id="pseudo"></label>
					<label for="pw">Mot de passe : <input type="password" name="pw" id="pw"></label>
					<button type="submit" class="button primary">Se connecter</button>
			</form>
		</div>

		<div class="medium-6 columns">
			<h2>S'inscrire</h2>
			<form action="inscription.php" method="post">
					<label for="nom">Nom : <input type="text" name="nom" id="nom" required></label>
					<label for="pw">Mot de passe : <input type="password" name="pw" id="pw" required></label>
					<label for="email">Email : <input type="email" name="email" id="email" required></label>
					<label for="iut">IUT : <input type="text" name="iut" id="iut"></label>
					<label for="metier">Métier : <input type="text" name="metier" id="metier"></label>
					<input type="submit" class="button primary" value="S'inscrire"/>
			</form>
		</div>
	</div>


	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>