<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle deviene la mère de mon DefaultController
use \W\Controller\Controller;

class EndroitController extends Controller
{

	/**
	 * Page d'affichage des musées
	 */
	public function afficherMusees()
	{
		$this->show('endroits/musees'); // je vais chercher le fichier musees.php dans le dossier app/templates/endroits
	}

	/**
	 * Page d'affichage des ballades
	 */
	public function afficherBallades()
	{
		$this->show('endroits/ballades');
	}
	
	/**
	 * Page d'affichage des monuments
	 */
	public function afficherMonuments()
	{
		$this->show('endroits/monuments');
	}

	public function afficherPanoramas()
	{
		$this->show('endroits/panoramas');
	}
}