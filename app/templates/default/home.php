<?php $this->layout('layout', ['title' => 'Accueil', 'id' => 'index']) ?>

<?php $this->start('principal') ?>
<main>
	
	<section class="lo_formulaire">

		<section>
			<article>
				<h2 class="lo_h2">Ce que je veux faire ou visiter: </h2>
				<?php //if(!empty($this->e($msg))) : ?>
	
				<?php// endif; ?>
				<!-- Formulaire qui sera placé sur la carte avec un fond blanc transparent -->
				<form method="post">
					<input type="checkbox" name="monuments" value="monuments">  Les monuments <br>
					<input type="checkbox" name="musees" value="musees">  Les musées <br>
					<input type="checkbox" name="galerie" value="galerie">  Galerie <br>
					<input type="checkbox" name="panoramas" value="panoramas">  Admirer le panorama de paris <br>
					<input type="radio" name="rayon" value="200" checked>  à 200m <br>
					<input type="radio" name="rayon" value="500">  à 500m <br>
					<div><input class="okBtn" type="submit"  value="OK"></div>
				</form>
			</article>
			<article id="map"></article>
		</section>

		<!-- ______________________Section pub_____________________ -->
		
		<section class="pub">
			<h2>Notre séléction du mois:<br> découvrez Paris autrement!</h2>
			<a href="#"><img src="<?= $this->assetUrl('img/4-roues-sous-un-parapluie.jpg') ?>" alt="4 roues"></a>
		</section>
</main>
<?php $this->stop('principal') ?>

<?php $this->start('') ?>



