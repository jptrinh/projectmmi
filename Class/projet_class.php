<?php
class Projet {

	private $id;
	private $nom;
	private $description;
	private $chef;



	//GETTERS
	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getChef() {
		return $this->chef;
	}


	//SETTERS
	public function setId($id) {
		$this->id = $id;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function setChef($chef) {
		$this->chef = $chef;
	}
    
    
    
    public function insertProjet() {
        try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
        
        $result = $bdd->prepare("INSERT INTO projets (nom, description, chef) VALUES (:nom, :description, :chef)");
        $result->execute(array(
			'nom' => $this->nom,
			'description' => $this->description,
			'chef' => $this->chef
			));
        
        $result->closeCursor();
        
    }
}