<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle deviene la mère de mon DefaultController
use \W\Controller\Controller;
use Manager\MuseeManager;
use Manager\PanoramaManager;
use Manager\PassageManager;
use Manager\MonumentManager;

class EndroitController extends Controller
{
	protected $musees;
	protected $panoramas;
	protected $passages;
	protected $monuments;

	public function __construct()
	{
		// ici je recupere les requetes de la table Musee, en passant par l'objet MuseeManager (qui contient les fonctions de requetes)
		$this->musees = new MuseeManager();

		// ici je recupere les requetes de la table Musee, en passant par l'objet PanoramaManager (qui contient les fonctions de requetes)
		$this->panoramas = new PanoramaManager();

		// ici je recupere les requetes de la table Musee, en passant par l'objet PanoramaManager (qui contient les fonctions de requetes)
		$this->passages = new PassageManager();

		// ici je recupere les requetes de la table Musee, en passant par l'objet PanoramaManager (qui contient les fonctions de requetes)
		$this->monuments = new MonumentManager();

	}


	public function afficherPanoramas()
	{
		$infos['panoramas'] = $this->panoramas->findAll();
		$this->show('endroits/panoramas', $infos);

	}

	/**
	 * Page d'affichage des musées
	 */
	public function afficherMusees()
	{
		$infos['musees'] = $this->musees->findAll();
		$this->show('endroits/musees', $infos); // je vais chercher le fichier musees.php dans le dossier app/templates/endroits
	}

	/**
	 * Page d'affichage des ballades
	 */
	public function afficherPassages()
	{
		$infos['passages'] = $this->passages->findAll();
		$this->show('endroits/passages', $infos );
	}
	
	/**
	 * Page d'affichage des monuments
	 */
	public function afficherMonuments()
	{
		$infos['monuments'] = $this->monuments->findAll();
		$this->show('endroits/monuments', $infos);
	}




}