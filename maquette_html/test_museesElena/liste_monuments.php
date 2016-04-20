<!DOCTYPE html>
<html lang="fr">
	<head>
	  <title>Paris online</title>
	  <meta charset="utf-8">

<?php
$DSN = 'mysql:host=localhost;dbname=parisonline';
$user = 'root';
$mdp = '';
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];

$parisonline = new PDO($DSN,$user,$mdp,$options);

// var_dump($parisonline);

$recup = $parisonline->query("SELECT *
							  FROM monuments");

$endroits = $recup->fetchAll(PDO::FETCH_ASSOC);

// var_dump($endroits);

?>


	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

<body>
	<header>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">Paris online</a>
	     </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li><a href="#">Musée</a></li>
	        <li><a href="#">Monument</a></li>
	        <li><a href="#">Balade</a></li>
	        <li><a href="#">Vue panoramique</a></li>
	 	  </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Recherche</a></li>
	        
	      </ul>
	    </div>
	  </div>
	</nav>
</header>
		<main>
			
			<section class="fiche">
				<h2>Les Monuments</h2>
				<div id="map_list"></div>
				
				
				<?php foreach($endroits as $key => $value) : ?>
		
					<article class="liste">
					
						<h3><?php echo $value['titre'] ?></h3>
						<!-- donnees json-->
						<div class="listeimg">
						<!-- image -->
						<img src="img/img_monuments/<?php echo $value['photo'] ?>" alt="<?php echo $value['photo'] ?>"/>
						</div>
						<h4><?php echo $value['descriptif_mini'] ?></h4>
						<p><?php echo $value['adresse'] ?></p><br>
						<p><?php echo $value['CP'] ?></p><br>

												  
						</div>
						<a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>
									 
					</article>
					
				<?php endforeach; ?>
								
			</section>
		</main>	
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

		
		
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=	AIzaSyA5-6P6fElf8xdI8v2pwSt9NokAAIHBFXs
        &libraries=visualization&callback=initMap"></script>		

		<script src="https://code.jquery.com/jquery-1.12.1.min.js"   integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I="   crossorigin="anonymous"></script>

  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	 	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	 	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

	 	 <!-- script pour activer google map -->
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

	 	 <script type="text/javascript" src="js/script_monuments.js"></script>
	</body>
</html>





