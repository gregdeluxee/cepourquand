<?php
class UserManager
{
  	private $_db; // Instance de PDO

  	public function __construct($db){
   		$this->setDb($db);
  	}

	public function setDb(PDO $db){
		$this->_db = $db;
	}

  	public function add(User $user){
    	$q = $this->_db->prepare('INSERT INTO user SET prenom_user = :prenom_user, nom_user = :nom_user, classe_user = :classe_user, password_user = :password_user, url_img_user = :url_img_user');

    	$q->bindValue(':prenom_user', $user->prenom_user());
    	$q->bindValue(':nom_user', $user->nom_user());
    	$q->bindValue(':classe_user', $user->classe_user());
    	$q->bindValue(':password_user', $user->password_user());
    	$q->bindValue(':url_img_user', $user->url_img_user());

    	$q->execute();
  	}

  	public function delete(User $user){
    	$this->_db->exec('DELETE FROM user WHERE id = '.$user->id());
  	}

  	public function get($id_user){
    	$id_user = (int) $id_user;

    	$q = $this->_db->query('SELECT id_user, prenom_user, nom_user, classe_user, login_user, password_user, last_login_user, loged_jeton_user, url_img_user FROM user WHERE id_user = '.$id_user);
    	$donnees = $q->fetch(PDO::FETCH_ASSOC);

    	return new User($donnees);
  	}
/*
  	public function getList(){
    	$user = array();

    	$q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages ORDER BY nom');

    	while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
      		$persos[] = new Personnage($donnees);
    	}

    	return $persos;
  	}

  	public function update(User $user){
    	$q = $this->_db->prepare('UPDATE user SET forcePerso = :forcePerso, degats = :degats, niveau = :niveau, experience = :experience WHERE id = :id');

    	$q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
    	$q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    	$q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    	$q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
    	$q->bindValue(':id', $perso->id(), PDO::PARAM_INT);

    	$q->execute();
  	}
*/
}
?>