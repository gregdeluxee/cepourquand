<?php 

class Tache{
	private $_id_tache;
	private $_id_projet_tache;
	private $_titre_tache;
	private $_date_remise_tache;
	private $_auteur_tache;
	private $_checked_tache;
	private $_hidden_tache;

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


	//GETTERS
	public function id_tache(){ return $this->_id_tache; }
	public function id_projet_tache(){ return $this->_id_projet_tache; }
	public function titre_tache(){ return $this->_titre_tache; }
	public function date_remise_tache(){ return $this->_date_remise_tache; }
	public function auteur_tache(){ return $this->_auteur_tache; }
	public function checked_tache(){ return $this->_checked_tache; }
	public function hidden_tache(){ return $this->_hidden_tache; }
	//SETTERS
	public function setId_tache($id_tache){
		$id_tache = (int) $id_tache;
		if($id_tache > 0){
			$this->_id_tache = $id_tache;
		}
	}
	public function setId_projet_tache($id_projet_tache){
		$id_projet_tache = (int) $id_projet_tache;
		if($id_projet_tache > 0){
			$this->_id_projet_tache = $id_projet_tache;
		}
	}
	public function setTitre_tache($titre_tache){
		if (is_string($titre_tache)){
			$this->_titre_tache = $titre_tache;
		}
	}
	public function setDate_remise_tache($date_remise_tache){
		$this->_date_remise_tache = $date_remise_tache;
	}
	public function setAuteur_tache($auteur_tache){
		$auteur_tache = (int) $auteur_tache;
		if ($auteur_tache > 0){
			$this->_auteur_tache = $auteur_tache;
		}
	}
	public function setChecked_tache($checked_tache){
		if (is_string($checked_tache)){
			$this->_checked_tache = $checked_tache;
		}
	}
	public function sethidden_tache($hidden_tache){
		if (is_string($hidden_tache)){
			$this->_hidden_tache = $hidden_tache;
		}
	}

	public function jourRestant(){
		$date = $this->date_remise_tache();
		$today = time();
		$date = strtotime($date);
		$difference = $date - $today;
		$jours = $difference/(60*60*24);
		return floor($jours);
	}//End function jourRestant

} //End class Tache