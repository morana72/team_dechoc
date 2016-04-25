<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle devienne la mère de mon DefaultController
use \W\Controller\Controller;
use Manager\ContactManager;
use Manager\MembreManager;
use W\Security\AuthentificationManager;


class MembreController extends Controller
{
	/*
	 * propriété qui contiendra l'objet MembreManager, représentant de la table Membres
	 *
	 * */
	protected $tableMembre;
	protected $validator;
	protected $contact;


	public function __construct()
	{
		// au moment où j'appel le constructeur, j'instancie le representant de la table
		$this->tableMembre = new MembreManager();
		$this->validator = new AuthentificationManager();
		$this->contact = new ContactManager();
	}

	/**
	 * Méthode pour afficher les infos du profil
	 */
	public function showProfil()
	{
		// afficher le profil avec les informations $_SESSION
		$this->show('user/profil');
	}

	public function afficherFormulaire() {
		$this->show('user/inscription'); // j'appelle le template user/inscription.php
	}

	public function enregistrerUtilisateur() {
		if (isset($_POST['envoi'])) {
			// je cree un tableau ave toutes les valeurs
			$utilisateur['email'] = (!empty($_POST['email'])) ? strip_tags(trim($_POST['email'])) : '';
			$utilisateur['mdp'] = (!empty($_POST['mdp'])) ? trim($_POST['mdp']) : '';

			if (preg_match('/@/', $utilisateur['email']) && (preg_match('/[A-Z]/', $utilisateur['mdp']) && preg_match('/[0-9]/', $utilisateur['mdp']))) {
				$utilisateur['mdp'] = password_hash($utilisateur['mdp'], PASSWORD_DEFAULT);
				$insertion = $this->tableMembre->insert($utilisateur,true); //insert in database user informations
				//$this->show('debug',['debug'=>$insertion]);
				if(!$insertion) {
					$_GET['erreur']=$insertion;
					$this->redirectToRoute('inscription_msg', ['msg' => 'error']);// TODO : Envoyer les données MSG et TYPE
				} else {
					$this->redirectToRoute('home'); //
				}
			} else {
				$this->redirectToRoute('inscription_msg', ['msg' => 'error mailmdp']);//
			}


		}
	}

	public function inscriptionMsg($msg = '')
	{
		$infos['msg'] = '';
		if($msg == 'no_email') {
			$infos['msg'] = 'Email non existant';
			$infos['type'] = 'danger';
		}
		$this->show('user/inscription', $infos);
	}
	
	public function connexion() {
		if(isset($_POST['connexion'])) {
			$email = !empty($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';
			$mdp = !empty($_POST['mdp']) ? strip_tags(trim($_POST['mdp'])) : '';

			$utilisateur = $this->validator->isValidLoginInfo($email,$mdp);
			//$this->show('debug', ['debug' => $utilisateur]);
			if($utilisateur == 'absent') {
				$this->redirectToRoute('inscription_msg', ['msg' => 'no_email']);
			} elseif($utilisateur > 0) {
				// je recupere ses infos et redirige vers la page profil
				$membre = $this->tableMembre->find($utilisateur);
				$this->validator->logUserIn($membre); // je rempli la session membre avec les infos de l'utilisateur				
				$this->redirect('profil'); //
			} else { // je retourne interdit si le mot de passe ne correspond pas
				$this->show('user/connexion', ['msg' => 'erreurs identifiants', 'id' => $utilisateur ]); // TODO : gestion de l'erreur identifiant
			}

		} else {
			$this->show('user/connexion');
		}
	}

	
}