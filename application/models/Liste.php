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


		$query = $this->db->count_all_results('liste INNER JOIN acces ON Liste.Id_Li = acces.Id_Li', FALSE)->where('Id_Us', $id_us);

		return $query;

	}
}
