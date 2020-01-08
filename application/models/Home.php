<?php

class Home extends CI_Model
{

	private $nom_user;

	public function __construct()
	{
		$this->load->database();
	}

	public function getNom() {
		return $this->nom_user;
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
		$query= $this->db->query('SELECT * FROM compte WHERE Nom_Us = \''.$id.'\' AND Pass_Us = \''.$pass.'\';');
		echo $query->num_rows();
    	if($query->num_rows() <= 0){
    		$this->nom_user = $id;
    		return false;
    	}
    	else{
    		return true;
    	}
    	
	}

	public function inscription($id, $pass){
		$data= array(
			'Nom_Us' => $id,
			'Pass_Us' => $pass,
			'Id_Us' => $this->db->count_all('compte') + 1
		);

		$this->db->insert('compte', $data);

		return $this->connexion($id, $pass);

	}
}
