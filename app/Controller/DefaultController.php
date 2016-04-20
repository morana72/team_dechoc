<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle deviene la mère de mon DefaultController
use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		// se trouve dans template/default/home.php
		$this->show('default/home');
	}

	public function contact() {
		$this->show('default/contact');
	}

	public function mentionsLegales() {
		$this->show('default/mentions');
	}
	public function about() {
		$this->show('default/about');
	}
}