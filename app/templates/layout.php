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
				<a class="navbar-brand" href="<?= $this->url('home') ?>">Paris online</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="<?= $this->url('musees') ?>">Musées</a></li>
					<li><a href="<?= $this->url('monuments') ?>">Monuments</a></li>
					<li><a href="<?= $this->url('passages') ?>">Passages</a></li>
					<li><a href="<?= $this->url('panoramas') ?>">Panoramas</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= $this->url('inscription') ?>"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
					<li><a href="<?= $this->url('connexion') ?>"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
					<li><a href="<?= $this->url('contact') ?>"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php
	if($id=='index'){
		echo'<h1 class="lo_h1">Paris Online</h1>
			<h2 class="lo_h2">Tout Paris à portée de main</h2>';
	}
	?>
	<!--________________________________ Fin Barre de navigation avec menu _________________________________-->
</header>

<?= $this->section('principal') ?>

<!--______________________________ Partie footer ____________________________________-->
<footer>
	<div>
		<ul>
			<li><a href="<?= $this->url('about') ?>">Qui sommes nous</a></li>
			<li><a href="<?= $this->url('mentions') ?>">Mentions légales</a></li>
			<li><a href="<?= $this->url('contact') ?>">Contact</a></li>
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

<script async defer src="https://maps.googleapis.com/maps/api/js?key=	AIzaSyA5-6P6fElf8xdI8v2pwSt9NokAAIHBFXs
        &libraries=visualization&callback=initMap"></script>
<script src="https://code.jquery.com/jquery-1.12.1.min.js"   integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I="   crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- script pour activer google map -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
	/*$('form').submit(function(event){
		event.preventDefault()
		$.ajax({
			method: "POST",
			success: function(data){
				console.log(data);
			}
		})
	})*/
</script>
<?= $this->section('scripts_persos') ?>

</body>
</html>