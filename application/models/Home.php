<?php

class Home extends CI_Model
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
		$query= $this->db->query('SELECT * FROM compte WHERE Nom_Us = \''.$id.'\' AND Pass_Us = \''.$pass.'\';');
		echo $query->num_rows();
    	if($query->num_rows() <= 0){
    		return false;
    	}
    	else{
    		return true;
    	}
    	
	}

	public function inscription($id, $pass){
		$data= array(
			$id => ':Nom_Us',
			$pass => ':Pass_Us'
		);

		$this->db->insert('compte', $data);

		return $this->connexion($id, $pass);

	}
}
