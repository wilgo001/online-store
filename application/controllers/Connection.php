<?php

class Connection extends CI_Controller
{

	public function show() {
		$this->load->view('welcome_message');
	}

	public function connect() {
		echo 'bite';
		if (isset($_POST["login"]) && isset($_POST["password"])) {
			$this->load->model('home');
			$login = filter_var ($_POST["login"], FILTER_SANITIZE_STRING);
			$pass = filter_var ($_POST["password"], FILTER_SANITIZE_STRING);
			if ($this->home->connexion($login, $pass)) {
				$this->load->view('accueil');
			}
		}
	}

}
