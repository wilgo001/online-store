<?php


class Connection extends CI_Controller
{

	public function connect() {
		$this->load->view('welcome_message');
		if (isset($_POST["login"]) && isset($_POST["password"])) {
			$this->load->model('home');
			if ($this->home->connexion($_POST)) {

			}
		}
	}

}
