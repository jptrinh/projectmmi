<?php
class Projet {

	private $id;
	private $nomProjet;
    private $type;
	private $description;
	private $chef;



	//GETTERS
	public function getId() {
		return $this->id;
	}

	public function getNomProjet() {
		return $this->nomProjet;
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

	public function setNomProjet($nom) {
		$this->nomProjet = $nom;
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
        
        $result = $bdd->prepare("INSERT INTO projets (nomProjet, type, description, chef) VALUES (:nomProjet, :type, :description, :chef)");
        $result->execute(array(
			'nomProjet' => $this->nomProjet,
            'type' => $this->type,
			'description' => $this->description,
			'chef' => $this->chef
			));
        
        $result->closeCursor();
        
    }
}