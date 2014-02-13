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
	public function id_user(){
		return $this->id_user;
	}
	public function prenom_user(){
		return $this->prenom_user;
	}
	public function nom_user(){
		return $this->nom_user;
	}
	public function classe_user(){
		return $this->classe_user;
	}
	public function login_user(){
		return $this->login_user;
	}
	public function password_user(){
		return $this->password_user;
	}
	public function last_login_user(){
		return $this->last_login_user;
	}
	public function loged_jeton_user(){
		return $this->loged_jeton_user;
	}
	public function url_img_user(){
		return $this->url_img_user;
	}


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
		return $this->_classe_user = $classe_user;
		}
	}
	public function setLogin_user(){
		$prenom = strtolower($this->prenom_user);
		$nom = strtolower($this->nom_user);
		$password = $prenom.'.'.$nom;
		return $this->_login_user = $password;

	}
	public function setPassword_user($password_user){
		if (strlen($password_user) > 5) {
			$password_user = crypt($password_user);
			return $this->_password_user = $password_user;
		}
	}
	public function setLast_login_user(){
		$date = date('m/d/Y h:i:s a', time());
		return $this->_last_login_user = $date;
	}
	public function setLoged_jeton_user(){
		return $this->_password_user;
	}
	public function setUrl_img_user(){
		return $this->_password_user;
	}

} //End class User