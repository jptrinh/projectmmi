<?php
class Membre {
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $pw;

	public function __construct() {
		$this -> nom = '';
		$this -> prenom = '';
		$this -> email = '';
		$this -> pw = '';
	}


//GETTERS
	public function getId() {
		return $this -> id;
	}

	public function getNom() {
		return $this -> nom;
	}

	public function getPrenom() {
		return $this -> prenom;
	}

	public function getPw() {
		return $this -> pw;
	}

	public function getEmail() {
		return $this -> email;
	}


//SETTERS
	public function setNom($nom) {
		$newNom = htmlspecialchars($nom);
		$this -> nom = $newNom;
	}

	public function setPrenom($prenom) {
		$newPrenom = htmlspecialchars($prenom);
		$this -> nom = $newPrenom;
	}

	public function setPw($pw) {
		$newPw = htmlspecialchars($pw);
		$this -> pw = $newPw;
	}

	public function setEmail($email) {
		$newEmail = htmlspecialchars($email);
		$this -> nom = $newEmail;
	}


	public function insertDB() {		
		
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e -> getMessage());
		}


		$nom = $this -> nom;
		$pw = $this -> pw;
		$email = $this -> email;

		$result = $bdd -> prepare("INSERT INTO members (nom, pw, email) VALUES (:nom, :pw, :email)");
		$result -> execute(array(
			'nom' => $nom,
			'pw' => $pw,
			'email' => $email
			));

		$result -> closeCursor();
	}

}