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
		$this->show('default/home');
	}

	public function inscription() {
		$this->show('default/inscription');
	}

}