<?php


class gestionlist extends CI_Controller
{

	public function index() {
		echo'je suis éxécuté';
		$this->load->model('liste');
		$this->load->view('accueil');
		$this->load->library('session');
		$this->accueil->afficherNbListe($this->session->userdata('pseudo'));
	}

	public function ajout() {

	}

}
