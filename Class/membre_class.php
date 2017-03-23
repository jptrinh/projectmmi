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

//CONSTRUCT
	/*public function __construct($id) {
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$result = $bdd->prepare("SELECT * FROM members WHERE id = :id");
		$result->execute(array(
			'id' => $id));

		$this->nom = 

	}*/


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
 		$this->prenom = htmlspecialchars($prenom);
		
	}

	public function setPw($pw) {
		$this->pw  = sha1(htmlspecialchars($pw));
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

		$result = $bdd->prepare("INSERT INTO members (nom, prenom, pw, email) VALUES (:nom, :prenom, :pw, :email)");
		$result->execute(array(
			'nom' => $this->nom,
			'prenom' => $this->prenom,
			'pw' => $this->pw,
			'email' => $this->email
			));

		$result->closeCursor();
	}

	public function connectMember() {
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$result = $bdd->prepare("SELECT id FROM members WHERE email = :email AND pw = :pw");
		$result->execute(array(
			'email' => $this->email,
			'pw' => $this->pw));

		$res = $result->fetch();

		if (!$res) {
			echo "Mauvais identifiants";
		} else {
			session_start();
			$_SESSION['id'] = $res['id'];
			$_SESSION['email'] = $res['email'];
			echo $_SESSION['id'];
			echo "Connecté";
		}
	}

}