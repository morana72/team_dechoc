<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Paris online | <?= $this->e($title) ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

<body id="<?= $this->e($id) ?>">
<header>
	<!--________________________________ Barre de navigation avec menu _________________________________-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Paris online</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="<?= $this->url('musees') ?>">Musées</a></li>
					<li><a href="liste_monuments.php">Monument</a></li>
					<li><a href="liste_balades.php">Balade</a></li>
					<li><a href="liste_vuepanoramique.php">Vue panoramique</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
					<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--________________________________ Fin Barre de navigation avec menu _________________________________-->
</header>

<?= $this->section('principal') ?>

<!--______________________________ Partie footer ____________________________________-->
<footer>
	<div>
		<ul>
			<li><a href="#">Qui sommes nous</a></li>
			<li><a href="#">Mentions légales</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>

	<ul>
		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
	</ul>
</footer>
<!--_______________________________ Fin de la partie footer _____________________________-->

<script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= $this->assetUrl('js/initMap.js') ?>"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>