<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	<meta name="viewport" content="width=device-width, user-scalable=no">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<title>Profil</title>
</head>

<body id="profil">
		<?php
			require_once('header.php');
		?>
	<main>
		<h1>Votre Profil</h1>
		<article>
			<img class="imageProfil" src="img/image.jpg">
			Bonjour "PSEUDO" !Envie de changer quelque chose?
		</article>
		<form method="POST" action="actio_connexion.php">
			<label>Pseudo</label>
			<input type="text" name="pseudo">
			<label>Mot de Passe</label>
			<input type="text" name="mdp">
			<label>Confirmez votre Mot de Passe</label>
			<input type="text" name="verif_mdp">
			<label>Email</label>
			<input type="email" name="email">
			<label>Confirmez votre Email</label>
			<input type="email" name="verif_email">
			<label>Image de profil (200*200 px)</label>
			<input name="userfile" type="file" />
			<input type="submit">
		</form>
		<form method="POST" action="actio_connexion.php">
			Supprimer votre profil? Ceci sera effectif et definitif apres validation par mail.
		</form>
	</main>
			<?php
			require_once('footer.php');
		?>
</body>
</html>