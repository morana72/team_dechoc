<?php
//-------- configuration ----------- //
require_once 'inc/init.inc.php'; //-- j'appelle les require qui se trouvent dans init
if(!empty($_POST['requete'])){
	$requete = trim(strip_tags($_POST['requete']));

	$requete = htmlspecialchars($_POST['requete']);

	$affichage = $parisonline ->prepare("SELECT endroit.titre, endroit.adresse, endroit.descriptif
FROM endroit
WHERE endroit.titre LIKE '$requete'
OR endroit.adresse LIKE '$requete'
OR endroit.descriptif LIKE '$requete'");
	$affichage->bindValue('$requete', '%' . $requete . '%', PDO::PARAM_STR);
	$affichage->execute();
	$infos_affichage = $affichage->fetchAll(PDO::FETCH_ASSOC);
	
}

include_once 'inc/header.inc.php';
?>
  <p>Vous allez faire une recherche dans notre base de données concernant les fonctions PHP. Tapez une requête pour réaliser une recherche.</p>
 <form action="" method="Post">
<input type="text" name="requete" size="10">
<input type="submit" name="bt_rechercher" value="Ok">
</form>
<h2>Resultat de votre recherche</h2>
	<?php if(!empty($_POST['bt_rechercher'])) : ?>
	<p>Nombre de resultat: <?php echo count($infos_affichage)?></p>	
	
	<?php endif ?>

Dans notre base de données. :<br/>
<br/>
<?
while($donnees = mysql_fetch_array($affichage))
var_dump($requete);
{
?>
<a href="recherche.php?id=<? echo $donnees['titre']; ?>"><? echo $donnees['adresse']; ?></a><br/>
<?
}
?>

<?

include_once 'inc/footer.inc.php';