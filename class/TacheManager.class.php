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
        deleted_tache = :deleted_tache';

  		$q = $this->_db->prepare($sql);
    	$q->bindValue(':id_projet_tache', $tache->id_projet_tache());
      	$q->bindValue(':titre_tache', $tache->titre_tache());
      	$q->bindValue(':date_remise_tache', $tache->date_remise_tache());
      	$q->bindValue(':auteur_tache', $tache->auteur_tache());
    	$q->bindValue(':checked_tache', $tache->checked_tache());
    	$q->bindValue(':deleted_tache', $tache->deleted_tache());

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

} //End class TacheManager