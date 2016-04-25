<!DOCTYPE html>
<html>
	<head>
	  <title>Contact</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="contact">

	<?php
		require_once('header.php');
	?>

    <form id="contact" method="POST" action="contact.php">
	   	
	   	<label> Sujet :</label>
		<input type="text" name="sujet"/>
	   	<label>Email :</label><input type="text" name="sujet"/>
		<label>Message :</label>
		<textarea name="message"></textarea>
		<input id="envoi" type="submit" name="envoi" value="Envoyer" />
    </form>


	<?php
			require_once('footer.php');
	?>
	</body>
</html>
