<!DOCTYPE html>
<html>
	<head>
	  	<title>Connexion</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 	 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<?php
			require_once('header.php');
		?>
<body id="connexion">
	<main>
		<h1>Connexion</h1>
		<form id="connexion" method="POST" action="actio_connexion.php">
			<label>Pseudo</label>
			<input type="text" name="pseudo">
			<label>Mot de Passe</label>
			<input type="text" name="mdp">
			<input type="submit">
		</form>
	</main>
	<?php
		require_once('footer.php');
	?>
</body>
</html>