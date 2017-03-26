<?php
class Membre {

	private $email;
	private $nom;
	private $prenom;
	private $pw;

	public function __construct() {
		$this->nom = '';
		$this->prenom = '';
		$this->email = '';
		$this->pw = '';
	}

//CONSTRUCT
	/*public function __construct($email) {
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$result = $bdd->prepare("SELECT * FROM members WHERE email = :email");
		$result->execute(array(
			'email' => $email));

		$res = $result->fetch();

		$this->nom = $res['nom'],
		$this->prenom = $res['prenom'],
		$this->email = $res['email'],

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

	//VERIFICATION EMAIL
	public function verifEmail($email) {
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$result = $bdd->prepare("SELECT email FROM members WHERE email = :email");
		$result->execute(array(
			'email' => $email));

		$res = $result->fetch();

		if (!$res) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	//ADD MEMBER
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

	//CONNECTION
	public function connectMember() {
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$result = $bdd->prepare("SELECT email, nom, prenom FROM members WHERE email = :email AND pw = :pw");
		$result->execute(array(
			'email' => $this->email,
			'pw' => $this->pw));

		$res = $result->fetch(PDO::FETCH_ASSOC);
		if (!$res) {
			echo "Mauvais identifiants";
		} else {
			session_start();
			$_SESSION['nom'] = $res['nom'];
			$_SESSION['prenom'] = $res['prenom'];
			$_SESSION['email'] = $res['email'];
		}
	}

}
