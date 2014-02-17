<?php 

class ProjetManager{

	private $_db; // Instance de PDO

  	public function __construct($db){
   		$this->setDb($db);
  	}

  	public function setDb(PDO $db){
  		$this->_db = $db;
  	}


  	public function addProjet(Projet $projet){
  		$sql = 'INSERT INTO projet 
        SET 
        titre_projet = :titre_projet, 
        date_remise_projet = :date_remise_projet,
        auteur_projet = :auteur_projet,
        professeur_projet = :professeur_projet, 
        cours_projet = :cours_projet,
        briefing_projet = :briefing_projet';

  		$q = $this->_db->prepare($sql);
    	$q->bindValue(':titre_projet', $projet->titre_projet());
      $q->bindValue(':date_remise_projet', $projet->date_remise_projet());
      $q->bindValue(':auteur_projet', $projet->auteur_projet());
      $q->bindValue(':professeur_projet', $projet->professeur_projet());
    	$q->bindValue(':cours_projet', $projet->cours_projet());
    	$q->bindValue(':briefing_projet', $projet->briefing_projet());

    	$q->execute() or die(print_r($q->errorInfo()));
      $q->closeCursor();
  	}

  	public function getProjetByUserId($id_user){
  		$sql = 'SELECT * 
  		FROM projet 
  		INNER JOIN projet_gestion 
  		ON projet_gestion.id_projet = projet.id_projet 
  		WHERE projet_gestion.id_user = :id_user';
  		$q = $this->_db->prepare($sql);
      	$q->execute(array(':id_user' => $id_user));
      	$donnees = $q->fetch(PDO::FETCH_ASSOC);
      	$q->closeCursor();
      	return new User($donnees);
  	}

} //End class ProjetManager