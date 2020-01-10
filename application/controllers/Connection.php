<?php

class Connection extends CI_Controller
{

	public function index() {
		$this->load->view('welcome_message');
	}

	public function connect() {
		if (isset($_POST["login"]) && isset($_POST["password"])) {
			$this->load->model('home');
			$login = filter_var ($_POST["login"], FILTER_SANITIZE_STRING);
			$pass = filter_var ($_POST["password"], FILTER_SANITIZE_STRING);
			if ($this->home->connexion($login, $pass)) {
				$this->load->model('liste');
				$this->load->view('accueil');
				$this->load->library('session');
				$nb = $this->liste->countListe($this->session->userdata('pseudo'));
				echo $this->session->userdata('pseudo');
				echo'<p>nb de listes : '.$nb.'</p>';
			}
		}
	}

	public function inscription() {
		if (isset($_POST["login"]) && isset($_POST["password1"]) && isset($_POST["password2"])) {
			$this->load->model('home');
			$login = filter_var ($_POST["login"], FILTER_SANITIZE_STRING);
			$pass = filter_var ($_POST["password1"], FILTER_SANITIZE_STRING);
			if ($this->home->inscription($login, $pass)) {
				$this->load->view('accueil');
			}
		}else {
			echo'erreur';
		}
	}

}
