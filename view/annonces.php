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
<h1>Annonces<small><a href="../control/add-annonce-page.php" class="button primary-button">+</a></small></h1>

	<?php require('../model/liste-annonce.php')?>
	<div class="row medium-up-3">
	    <?php while($annonces = $result->fetch()): ?>
	        <div class="column column-block" style="border: 1px solid black;">
	            <p>
                    <a data-open="annonce<?=$annonces["id"]?>"><?=ucfirst($annonces["poste"])?></a>
	            </p>
	            <p>
	                <?=$annonces['prenom'] . ' ' . $annonces['nom'];?>
	            </p>
	            <p>
	                <?=$annonces['projet']?><span class="label"><?=$annonces['type']?></span>
	            </p>
	            
	            <p>
	                <?php include('../model/temps-annonce.php');?> 
	            </p>
	            
	        </div>
	        <?php endwhile ?>
	</div>



	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>