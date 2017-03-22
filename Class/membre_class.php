<?php
class Membre {
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $pw;

	public function __construct() {
		$this->nom = '';
		$this->prenom = '';
		$this->email = '';
		$this->pw = '';
	}


//GETTERS
	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function getPw() {
		return $this->pw;
	}

	public function getEmail() {
		return $this->email;
	}


//SETTERS
	public function setNom($nom) {
		$this->nom = htmlspecialchars($nom);
	}

	public function setPrenom($prenom) {
 		$this->nom = htmlspecialchars($prenom);
		
	}

	public function setPw($pw) {
		$this->pw  = htmlspecialchars($pw);
	}

	public function setEmail($email) {
		$this->email = htmlspecialchars($email);
	}


	public function insertDB() {		
		
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$result = $bdd->prepare("INSERT INTO members (nom, pw, email) VALUES (:nom, :pw, :email)");
		$result->execute(array(
			'nom' => $this->nom,
			'pw' => $this->pw,
			'email' => $this->email
			));

		$result->closeCursor();
	}

}