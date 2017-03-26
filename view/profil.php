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

	<h1><?php echo $_SESSION['prenom'] . ' ' .$_SESSION['nom']; ?></h1>
	<?php include_once('../model/liste-projet.php');?>

	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>