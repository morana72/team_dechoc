<?php

namespace Controller;

// je fais appel à la classe Controller generale, pour qu'elle devienne la mère de mon DefaultController
use W\Controller\Controller;

// j'importe la classe MembreManager pour acceder à la table Membres dans la base de données
use Manager\MembreManager;

class UserController extends Controller
{
	/*
	 * propriété qui contiendra l'objet MembreManager, représentant de la table Membres
	 * */
	protected $tableMembre;

	public function __construct()
	{
		// au moment où j'appel le constructeur, j'instancie le representant de la table
		$this->tableMembre = new MembreManager();
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
		$this->show('user/profil',$user);
	}

	/**
	 * Méthode pour afficher les infos du profil
	 */
	public function setUser()
	{
		// je vais chercher le template "inscription.php" dans le chemin templates/user/inscription.php
	if(isset($_POST['envoi'])) {
            
       
 // je cree un tableau ave toutes les             
if(!empty($prenom) && !empty($nom) && !empty($email) && !empty($mot_de_passe) && !empty($genre) && !empty($telephone) && !empty($ville) && !empty($code_postal) && !empty($adresse) ) {
           
            
$utilisateur['prenom'] = (!empty($_POST['prenom'])) ? trim(strip_tags($_POST['prenom'])) : '';
$utilisateur['nom'] = (!empty($_POST['nom'])) ? trim(strip_tags($_POST['nom'])) : '';
$utilisateur['email'] = (!empty($_POST['email'])) ? strip_tags($_POST['email']) : '';
$utilisateur['mot_de_passe'] = (!empty($_POST['mdp'])) ? $_POST['mdp'] : '';
$utilisateur['genre'] = (!empty($_POST['genre'])) ? strip_tags($_POST['genre']) : '';
$utilisateur['telephone'] = (!empty($_POST['telephone'])) ? strip_tags($_POST['telephone']) : '';
$utilisateur['ville'] = (!empty($_POST['ville'])) ? strip_tags($_POST['ville']) : '';
$utilisateur['code_postal'] = (!empty($_POST['code_postal'])) ? strip_tags($_POST['code_postal']) : '';
$utilisateur['adresse'] = (!empty($_POST['adresse'])) ? strip_tags($_POST['adresse']) : '';






if( preg_match('/@/', $utilisateur['email']) && ( preg_match('/[A-Z]/', $utilisateur['mot_de_passe']) && preg_match('/[0-9]/', $utilisateur['mot_de_passe'])) ) {

$utilisateur['mot_de_passe'] = password_hash($utilisateur['mot_de_passe'], PASSWORD_DEFAULT);


			$this->tableMembre->insert($utilisateur);
		}
		$this->show('user/inscription');
	}
    }

}