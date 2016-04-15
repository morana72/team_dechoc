<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/profil', 'User#showProfil', 'profil'],
		// si je clic sur le formulaire d'inscription ou si je saisi l'url pour y arriver
		// arguments :
		// 1: GET ou POST (ou les deux), 2: URL saisie par l'internaute, 3: nom du controller # nom de sa méthode appelée, 4: nom de la route
		['GET', '/inscription', 'Membre#afficherFormulaire', 'inscription'],
		['POST', '/inscription', 'Membre#enregistrerUtilisateur', 'inscription_post'],
		['GET', '/inscription/[:msg]', 'Membre#inscriptionMsg', 'inscription_msg'],
		['GET|POST', '/connexion', 'Membre#connexion', 'connexion'],
		['GET', '/musees', 'Endroit#afficherMusees', 'musees'],
		['GET', '/ballades', 'Endroit#afficherBallades', 'ballades'],
		['GET', '/monuments', 'Endroit#afficherMonuments', 'monuments'],
		['GET', '/paronamas', 'Endroit#afficherPanoramas', 'panoramas'],
		['GET', '/ficheendroits', 'Endroit#afficherEndroits', 'ficheendroits'],

	);