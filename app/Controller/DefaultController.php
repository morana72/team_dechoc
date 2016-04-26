<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle deviene la mère de mon DefaultController
use \W\Controller\Controller;
use Manager\MentionManager;
use Manager\ContactManager;
use Manager\AboutManager;


class DefaultController extends Controller
{

	protected $mentions;
	protected $contact;
	protected $about;


	public function __construct()
	{
		// ici je recupere les requetes de la table Mentions, en passant par l'objet MentionsManager (qui contient les fonctions de requetes)
		$this->mentions = new MentionManager();


		$this->contact = new ContactManager();

		$this->about = new AboutManager();
	}


	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		// se trouve dans template/default/home.php
		$this->show('default/home');
	}

	public function showContact() {

		$this->show('default/contact');
	}
	public function SendMessage() {
		$this->show('default/SendMessage');
	}
	public function mentionsLegales() {
		$this->show('default/mentions');
	}
	public function showAbout() {
		$this->show('default/about');
	}
	
	
}