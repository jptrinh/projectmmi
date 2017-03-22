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
	<form action="connect.php" method="post">
		<div class="row">
			<div class="medium-4 columns">
				<label for="pseudo">Pseudo : <input type="text" name="pseudo" id="pseudo"></label>
			</div>
			<div class="medium-4 columns">
				<label for="pw">Mot de passe : <input type="password" name="pw" id="pw"></label>
			</div>
			<div class="medium-4 columns">
				<button type="submit">Se connecter</button>
			</div>
		</div>
	</form>

	<form action="inscription.php" method="post">
		<div class="row">
			<div class="medium-4 columns">
				<label for="pseudo">Pseudo : <input type="text" name="pseudo" id="pseudo"></label>
			</div>
			<div class="medium-4 columns">
				<label for="pw">Mot de passe : <input type="password" name="pw" id="pw"></label>
			</div>
			<div class="medium-4 columns">
				<button type="submit">S'inscrire</button>
			</div>
		</div>
	</form>
	<p>hello</p>


	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>