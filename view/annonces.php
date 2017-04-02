<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>project mmi</title>
	<link rel="stylesheet" href="../css/foundation.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<?php include_once('menu.php');?>
	<div class="row">
        <h1>Liste des annonces    
            
            <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" data-click-open="false" tabindex="2" title="Ajouter une annonce"><a href="../control/add-annonce-page.php"><?php echo file_get_contents("../ressources/addannonce.svg");?></a></span>
        </h1>
	    
	</div>


	<?php require('../model/liste-annonce.php')?>
	<div class="row small-up-1 medium-up-2 large-up-3">
	    <?php while($annonces = $result->fetch()): ?>
	        <div class="column column-block">
	            <div class="annonce">
                    <p>
                        <a class="poste" data-open="annonce<?=$annonces["id"]?>"><?=ucfirst($annonces["poste"])?></a>
                        <?php include("../model/type-annonce.php")?>
                        <span class="float-right label <?=$type?>"><?=$type?></span>
                    </p>

                    <p>
                        <?=$annonces['prenom'] . ' ' . $annonces['nom'];?>
                    </p>
                    <p>
                        <?=$annonces['projet']?><small> / <?=$annonces['type']?></small>

                        <span class="float-right">
                        <?php echo file_get_contents("../ressources/time.svg");?>
                        <?php include('../model/temps-annonce.php');?> 
                        </span>
                    </p>
                </div>
	            
	            
	            
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