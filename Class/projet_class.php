<?php
class Projet {

	private $id;
	private $nom;
    private $type;
	private $description;
	private $chef;



	//GETTERS
	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}
    
    public function getType() {
		return $this->type;
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
    
    public function setType($type) {
		$this->type = $type;
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
        
        $result = $bdd->prepare("INSERT INTO projets (nom, type, description, chef) VALUES (:nom, :type, :description, :chef)");
        $result->execute(array(
			'nom' => $this->nom,
            'type' => $this->type,
			'description' => $this->description,
			'chef' => $this->chef
			));
        
        $result->closeCursor();
        
    }
}