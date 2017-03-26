<ul class="dropdown menu align-right" data-dropdown-menu>
	<li>
       <a href="../control/profil.php"><?php echo $_SESSION["prenom"] . " " . $_SESSION["nom"]; ?> </a>
        <ul class="menu">
            <li><a href="../control/disconnect.php">Déconnection</a></li>
        </ul>
    </li>
    <li><a href="../control/projet.php">Ajouter un projet</a></li>
	<li><a href="../control/annonces.php">Annonces</a></li>
	
	
</ul>
