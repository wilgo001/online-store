<?php

class Reviews_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_reviews($id) {
		if ($id != FALSE) {
			$query = $this->db->get_where('TP6_Tests', array('id' => $id));
			return $query->row_array();
		} else {
			return FALSE;
		}
	}
	public function connexion($id, $pass){
		$requete = $this->db->prepare('SELECT * FROM compte WHERE Nom_Us = :nom AND Pass_Us = :pass');
	    $requete->bindValue(":nom", $id);
	    $requete->bindValue(":pass", $pass);
	    $requete->execute();
    
    	$donnees = $requete->fetch();
		
    	if($donnees->fetch()){
    		return true;
    	}
    	else{
    		return false;
    	}
    	
	}
}
