<!DOCTYPE html>
<html>
	<head>
	  	<title>Paris online</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 	 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
		
<body id="inscription">
		<?php
			require_once('header.php');
		?>
	<main >
		<h1>Hey!Bienvenue !</h1>
		<h2>Pour une utilisation optimale du site il est préférable de s'inscrire</h2>
		<form method="POST" action="Inscription.php">
			<label>Pseudo</label>
			<input type="text" name="pseudo">
			<label>Mot de Passe</label>
			<input type="text" name="mdp">
			<label>Confirmer Mot de Passe</label>
			<input type="text" name="verif_mdp">
			<label>Email</label>
			<input type="email">
			<label>Verification de l'Email</label>
			<input type="verif_email">
			<label>Selectionnez une image (200*200 px jpeg /png)</label>
			<input name="userfile" type="file" />
			<input type="submit">
		</form>
	</main>
	<?php
		require_once('footer.php');
	?>
</body>
</html>