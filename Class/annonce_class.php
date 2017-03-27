<?php
class Annonce {
    private $id;
    private $poste;
    private $projet;
    private $chef;
    private $publication;
    private $description;
    
    
    //GETTERS
    public function getId() {
        return $this->id;
    }
    
    public function getPoste() {
        return $this->poste;
    }
    
    public function getProjet() {
        return $this->projet;
    }
    
    public function getChef() {
        return $this->chef;
    }
    
    public function getPublication() {
        return $this->publication;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    //SETTERS
    public function setPoste($poste) {
        $this->poste = $poste;
    }
    
    public function setProjet($projet) {
        $this->projet = $projet;
    }
    
    public function setChef($chef) {
        $this->chef = $chef;
    }
    
    public function setPublication() {
        $this->publication = date("Y/m/d");
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    //INSERT
    public function insertAnnonce() {
        try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
        
        $result = $bdd->prepare("INSERT INTO annonces (poste, projet, chef, publication, description) VALUES (:poste, :projet, :chef, :publication, :description)");
        $result->execute(array(
        'poste' => $this->poste,
        'projet' => $this->projet,
        'chef' => $this->chef,
        'publication' => $this->publication,
        'description' => $this->description));
    
        $result->closeCursor();
    }
    
}