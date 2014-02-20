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
        auteur_id_projet = :auteur_id_projet,
        auteur_prenom_projet = :auteur_prenom_projet,
        cours_projet = :cours_projet,
        briefing_projet = :briefing_projet';

  		$q = $this->_db->prepare($sql);
    	$q->bindValue(':titre_projet', $projet->titre_projet());
      $q->bindValue(':date_remise_projet', $projet->date_remise_projet());
      $q->bindValue(':auteur_id_projet', $projet->auteur_id_projet());
      $q->bindValue(':auteur_prenom_projet', $projet->auteur_prenom_projet());
    	$q->bindValue(':cours_projet', $projet->cours_projet());
    	$q->bindValue(':briefing_projet', $projet->briefing_projet());
    	$q->execute() or die(print_r($q->errorInfo()));
      //return $this->_db->lastInsertId();
      $q->closeCursor();
  	}

    public function addCollaborateur($id_projet, $id_user){
      $sql = 'INSERT INTO projet_gestion
        SET 
        id_projet = :id_projet, 
        id_user = :id_user,
        hidden_projet = :hidden_projet,
        checked_projet = :checked_projet';

      $q = $this->_db->prepare($sql);
      $q->bindValue(':id_projet', $id_projet);
      $q->bindValue(':id_user', $id_user);
      $q->bindValue(':hidden_projet', "0");
      $q->bindValue(':checked_projet', "0");

      $q->execute() or die(print_r($q->errorInfo()));
      $q->closeCursor();
    }

  	public function getProjetByUserId($id_user){
  		$sql = 'SELECT * 
  		FROM projet 
  		INNER JOIN projet_gestion 
  		ON projet_gestion.id_projet = projet.id_projet 
  		WHERE projet_gestion.id_user = :id_user AND projet_gestion.hidden_projet = "0"
      ORDER BY date_remise_projet, checked_projet';
  		$q = $this->_db->prepare($sql);
      	$q->execute(array(':id_user' => $id_user)) or die(print_r($q->errorInfo()));;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
          $projets[] = new Projet($donnees);
        }
      	$q->closeCursor();
      	return $projets;
  	}

    public function getProjetById($id_projet){
      $sql = 'SELECT * 
      FROM projet 
      WHERE id_projet = :id_projet';
      $q = $this->_db->prepare($sql);
      $q->execute(array(':id_projet' => $id_projet)) or die(print_r($q->errorInfo()));;
      $donnees = $q->fetch(PDO::FETCH_ASSOC);
      $q->closeCursor();
      return new Projet($donnees);
    }

    public function updateChekedProjet($id_user, $id_projet){
      $sql = 'UPDATE projet_gestion SET checked_projet = "1" WHERE id_projet = :id_projet AND id_user = :id_user';
      $q = $this->_db->prepare($sql);
      $q->bindValue(':id_projet', $id_projet);
      $q->bindValue(':id_user', $id_user);
      $q->execute() or die(print_r($q->errorInfo()));
      $q->closeCursor();
    }

    public function updateHiddenProjet($id_user, $id_projet){
      $sql = 'UPDATE projet_gestion SET hidden_projet = "1" WHERE id_projet = :id_projet AND id_user = :id_user';
      $q = $this->_db->prepare($sql);
      $q->bindValue(':id_projet', $id_projet);
      $q->bindValue(':id_user', $id_user);
      $q->execute() or die(print_r($q->errorInfo()));
      $q->closeCursor();
    }

    public function exists($info){
        return (bool) $this->_db->query('SELECT COUNT(*) FROM projet_gestion WHERE hidden_projet = 0 AND id_user = '.$info)->fetchColumn();
    }

} //End class ProjetManager