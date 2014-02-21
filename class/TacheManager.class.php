<?php 

class TacheManager{

	private $_db; // Instance de PDO

  	public function __construct($db){
   		$this->setDb($db);
  	}

  	public function setDb(PDO $db){
  		$this->_db = $db;
  	}


  	public function addTache(Tache $tache){
  		$sql = 'INSERT INTO tache 
        SET 
        id_projet_tache = :id_projet_tache, 
        titre_tache = :titre_tache,
        date_remise_tache = :date_remise_tache,
        auteur_tache = :auteur_tache, 
        checked_tache = :checked_tache,
        hidden_tache = :hidden_tache';

  		$q = $this->_db->prepare($sql);
    	$q->bindValue(':id_projet_tache', $tache->id_projet_tache());
      	$q->bindValue(':titre_tache', $tache->titre_tache());
      	$q->bindValue(':date_remise_tache', $tache->date_remise_tache());
      	$q->bindValue(':auteur_tache', $tache->auteur_tache());
    	$q->bindValue(':checked_tache', $tache->checked_tache());
    	$q->bindValue(':hidden_tache', $tache->hidden_tache());

    	$q->execute() or die(print_r($q->errorInfo()));
      	$q->closeCursor();
  	}

  	public function getTacheByProjetId($id_projet){
      $sql = 'SELECT * 
      FROM tache 
      WHERE id_projet_tache= :id_projet';
      $q = $this->_db->prepare($sql);
      $q->execute(array(':id_projet' => $id_projet));
      while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        $taches[] = new Tache($donnees);
      }
      $q->closeCursor();
      return $taches;
    }

    public function getTacheByUserId($id_user){
      $sql = 'SELECT * 
      FROM tache 
      WHERE auteur_tache= :id_user
      ORDER BY checked_tache, date_remise_tache';
      $q = $this->_db->prepare($sql);
      $q->execute(array(':id_user' => $id_user));
      while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        $taches[] = new Tache($donnees);
      }
      $q->closeCursor();
      return $taches;
    }

    public function getTitreProjet($id_projet){
    $projetManager = new ProjetManager($db);
    $projet = $projetManager->getProjetById($id_projet);
    return $projet->titre_projet();
  }//End function titreProjet

    public function updateChekedTache($auteur_tache, $id_tache){
      $sql = 'UPDATE tache SET checked_tache = "1" WHERE id_tache = :id_tache AND auteur_tache = :auteur_tache';
      $q = $this->_db->prepare($sql);
      $q->bindValue(':id_tache', $id_tache);
      $q->bindValue(':auteur_tache', $auteur_tache);
      $q->execute() or die(print_r($q->errorInfo()));
      $q->closeCursor();
    }

    public function updateHiddenTache($auteur_tache, $id_tache){
      $sql = 'UPDATE tache SET hidden_tache = "1" WHERE id_tache = :id_tache AND auteur_tache = :auteur_tache';
      $q = $this->_db->prepare($sql);
      $q->bindValue(':id_tache', $id_tache);
      $q->bindValue(':auteur_tache', $auteur_tache);
      $q->execute() or die(print_r($q->errorInfo()));
      $q->closeCursor();
    }

    public function exists($info){
        return (bool) $this->_db->query('SELECT COUNT(*) FROM tache WHERE auteur_tache = '.$info)->fetchColumn();
    }

} //End class TacheManager