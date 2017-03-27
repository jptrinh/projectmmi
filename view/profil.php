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
        
	<h1 class="text-center"><?=$_SESSION['prenom'] . " " . $_SESSION['nom']; ?></h1>
	<h3 class="text-center"><?=$_SESSION['iut']?></h3>
	
   <?php include_once('../model/liste-projet.php');?>
   
    
    <div class="row medium-up-3">
        <?php while ($donnees = $result->fetch()):?>
            <div class="column column-block" style="border: 1px solid black;">
                <p>
                    <a data-open="projet<?=$donnees['id']?>"><?=ucfirst($donnees['nomProjet'])?></a>
                    <span class="label"><?=$donnees['type']?></span>
                </p>
                
                <p>
                    <?=$donnees['description']?> 
                </p>
            </div>
            
            <div class="reveal" id="projet<?=$donnees['id']?>" data-reveal>
               
                <button class="close-button" data-close aria-label="Close modal" type="button"> <span aria-hidden="true">&times;</span> </button>
                <h1><?=$donnees['nomProjet']?></h1>
                <p><?=$donnees['description']?></p> 
                
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