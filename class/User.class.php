<?php 

class User{
	
	private $_id_user;
	private $_prenom_user;
	private $_nom_user;
	private $_classe_user;
	private $_login_user;
	private $_password_user;
	private $_last_login_user;
	private $_loged_jeton_user = 0;
	private $_url_img_user;

	public function __construct(array $donnees){
		$this->hydrate($donnees);
	}
	public function hydrate(array $donnees){
		foreach ($donnees as $key => $value){
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);
			// Si le setter correspondant existe.
			if (method_exists($this, $method)){
			// On appelle le setter.
				$this->$method($value);
			}
		}
	}

	// GETTERS
	public function id_user(){ return $this->_id_user; }
	public function prenom_user(){ return $this->_prenom_user; }
	public function nom_user(){ return $this->_nom_user; }
	public function classe_user(){ return $this->_classe_user; }
	public function login_user(){ return $this->_login_user; }
	public function password_user(){ return $this->_password_user; }
	public function last_login_user(){ return $this->_last_login_user; }
	public function loged_jeton_user(){ return $this->_loged_jeton_user; }
	public function url_img_user(){ return $this->_url_img_user; }

	// SETTERS
	public function setId_user($id_user){
		$id_user = (int) $id_user;
		if($id_user > 0){
			$this->_id_user = $id_user;
		}
	}
	public function setPrenom_user($prenom_user){
		if (is_string($prenom_user))		{
			$this->_prenom_user = $prenom_user;
		}
	}
	public function setNom_user($nom_user){
		if (is_string($nom_user))		{
			$this->_nom_user = $nom_user;
		}
	}
	public function setClasse_user($classe_user){
		if (is_string($classe_user)) {
			$this->_classe_user = $classe_user;
		}
	}
	public function setLogin_user($login_user){
		$prenom = $this->prenom_user();
		$nom = $this->nom_user();
		$login = strtolower(remove_accents($prenom.'.'.$nom));
		$this->_login_user = $login;

	}
	public function setPassword_user($password_user){
		if (strlen($password_user) > 5) {
			//$password_user = crypt($password_user);
			$this->_password_user = $password_user;
		}
	}
	public function setLast_login_user($last_login_user){
		//$date = date('m/d/Y h:i:s a', time());
		$this->_last_login_user = $last_login_user;
	}
	public function setLoged_jeton_user($loged_jeton_user){
		$this->_loged_jeton_user = $loged_jeton_user;
	}
	public function setUrl_img_user($url_img_user){
		$this->_url_img_user = $url_img_user;
	}

	//hashage password
	public function passwordHash($password){
		$hash = hash('sha512', $password);
		$this->setPassword_user($hash);
	}

} //End class User