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

$recup = $parisonline->query("SELECT id, titre, photo, descriptif, descriptif_mini, adresse, CP 
							  FROM musees");

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
				<h2>Les Musées</h2>
				<div id="map_list"></div>
				<script>
					var modaux = {};
				</script>
				<?php $i=0; ?>
				<?php foreach($endroits as $key => $value) : ?>
			<!-- id=<?=$value['titre']?> -->
					<article class="liste">
					
						<h3><?php echo $value['titre'] ?></h3>
						<!-- donnees json-->
						<div class="listeimg">
						<!-- image -->
						<img src="img/img_musees/<?php echo $value['photo'] ?>" alt="<?php echo $value['photo'] ?>"/>
						</div>
						<h4><?php echo $value['descriptif_mini'] ?></h4>
						<p><?php echo $value['adresse'] ?></p><br>
						<p><?php echo $value['CP'] ?></p><br>

						<div class="container">
  
						  <!-- Trigger the modal with a button -->
						  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_<?= $value['id'] ?>">plus d'info</button>
						  <script>
						  		modaux[<?= $i?>] = <?= $value['id'] ?>;
						  </script>

						  <!-- Modal -->
						  <div class="modal fade" id="myModal_<?= $value['id'] ?>" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title"><?php echo $value['titre'] ?></h4>
						        </div>
						        <div class="modal-body" id="modalBody_<?= $value['id'] ?>">
						          	<div class="listeimg">
										<!-- image -->
										<img src="img/img_musees/<?php echo $value['photo'] ?>" alt="<?php echo $value['photo'] ?>"/>
									 </div>
						          <p><?php echo $value['descriptif_mini'] ?></p>

						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        </div>
						      </div>
						      
						    </div>
						  </div>
						  
						</div>
						<a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>
									 
					</article>
					<?php $i++; ?>
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

	 	 <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>





