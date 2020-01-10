<?php


class Liste extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function countListe($id_us){

		//il faut utiliser l'id de l'utilisateur
		//il faut récupérer les listes ou l'utilisateur a acces
		//il faut récupérer les listes
		//il faut récupérer le nombre de listes

		//$query= $this->db->query('SELECT * FROM liste INNER JOIN acces ON Liste.Id_Li = acces.Id_Li WHERE acces.Id_Us = \''.$id_us.'\';');
		
		$this->db->select("*");
		$this->db->from("liste");
		$this->db->join("acces", "liste.Id_Li = acces.Id_Li");
		$this->db->join("compte", 'compte.Id_Us = acces.Id_Us');
		$this->db->where("Nom_Us", 'wilgo');
		$query = $this->db->count_all_results();
		return $query;

	}
}
