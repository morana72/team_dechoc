<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle devienne la mère de mon DefaultController
use W\Controller\Controller;

// j'importe la classe MembreManager pour acceder à la table Membres dans la base de données
use Manager\MembreManager;

// j'importe l'authentificateur
use W\Security\AuthentificationManager;

class MembreController extends Controller
{
	/*
	 * propriété qui contiendra l'objet MembreManager, représentant de la table Membres
	 * */
	protected $tableMembre;

	protected $validator;

	public function __construct()
	{
		// au moment où j'appel le constructeur, j'instancie le representant de la table
		$this->tableMembre = new MembreManager();
		$this->validator = new AuthentificationManager();
	}

	/**
	 * Méthode pour afficher les infos du profil
	 */
	public function showProfil()
	{
		$user = [
			'prenom' => 'Bruce',
			'nom' => 'WAYNE',
		];
		$this->show('user/profil', $user);
	}

	public function afficherFormulaire() {
		$this->show('user/inscription'); // j'appelle le template user/inscription.php
	}

	public function enregistrerUtilisateur() {
		if (isset($_POST['envoi'])) {
			// je cree un tableau ave toutes les valeurs
			$utilisateur['email'] = (!empty($_POST['email'])) ? strip_tags(trim($_POST['email'])) : '';
			$utilisateur['mot_de_passe'] = (!empty($_POST['mdp'])) ? trim($_POST['mdp']) : '';

			if (preg_match('/@/', $utilisateur['email']) && (preg_match('/[A-Z]/', $utilisateur['mot_de_passe']) && preg_match('/[0-9]/', $utilisateur['mot_de_passe']))) {

				$utilisateur['mot_de_passe'] = password_hash($utilisateur['mot_de_passe'], PASSWORD_DEFAULT);

				$insertion = $this->tableMembre->insert($utilisateur);
				if(!$insertion) {
					$this->redirectToRoute('inscription_msg', ['msg' => 'error']); // TODO : Envoyer les données MSG et TYPE
				} else {
					$this->redirectToRoute('home'); // TODO : Envoyer les données MSG et TYPE
				}
			} else {
				$this->redirectToRoute('inscription'); // TODO : Envoyer les données MSG et TYPE
			}


		}
	}

	public function inscriptionMsg($msg = '')
	{
		$infos['msg'] = '';
		if($msg == 'error') {
			$infos['msg'] = 'Erreur sur les identifiants';
			$infos['type'] = 'danger';
			$this->show('user/inscription', $infos);
		}
	}
	
	public function connexion() {
		if(!empty($_POST['connexion'])) {
			$email = !empty($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';
			$mdp = !empty($_POST['mot_de_passe']) ? strip_tags(trim($_POST['mot_de_passe'])) : '';

			$utilisateur = $this->validator->isValidLoginInfo($email,$mdp);
			if($utilisateur == 'absent') {
				$this->show('user/connexion', ['msg' => 'email non existant']);
			} elseif($utilisateur > 0) {
				// je recupere ses infos et redirige vers la page profil
				$coco['membre'] = $this->tableMembre->find($utilisateur);
				$this->show('user/profil', $coco); // TODO : transformer l'url "connexion" en url "profil"
			} else {
				$this->show('user/connexion', ['msg' => 'erreurs identifiants']);
			}

		}
		$this->show('user/connexion');
	}

	
}