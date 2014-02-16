<?php 

class Projet{
	private $_id_projet;
	private $_titre_projet;
	private $_date_remise_projet;
	private $_auteur_projet;
	private $_professeur_projet;
	private $_cours_projet;
	private $_briefing_projet;

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
	public function id_projet(){ return $this->_id_projet; }
	public function titre_projet(){ return $this->_titre_projet; }
	public function date_remise_projet(){ return $this->_date_remise_projet; }
	public function auteur_projet(){ return $this->_auteur_projet; }
	public function professeur_projet(){ return $this->_professeur_projet; }
	public function cours_projet(){ return $this->_cours_projet; }
	public function briefing_projet(){ return $this->_briefing_projet; }
	//SETTERS
	public function setId_projet($id_projet){
		$id_projet = (int) $id_projet;
		if($id_projet > 0){
			$this->_id_projet = $id_projet;
		}
	}
	public function setTitre_projet($titre_projet){
		if (is_string($titre_projet)){
			$this->_titre_projet = $titre_projet;
		}
	}
	public function setDate_remise_projet($date_remise_projet){
		$this->_date_remise_projet = $date_remise_projet;
	}
	public function setAuteur_projet($auteur_projet){
		$auteur_projet = (int) $auteur_projet;
		if ($auteur_projet > 0){
			$this->_auteur_projet = $auteur_projet;
		}
	}
	public function setProfesseur_projet($professeur_projet){
		if (is_string($professeur_projet)){
			$this->_professeur_projet = $professeur_projet;
		}
	}
	public function setCours_projet($cours_projet){
		if (is_string($cours_projet)){
			$this->_cours_projet = $cours_projet;
		}
	}
	public function setBriefing_projet($briefing_projet){
		if (is_string($briefing_projet)){
			$this->_briefing_projet = $briefing_projet;
		}
	}


	public function test(){

	}//End function test

} //End class Projet