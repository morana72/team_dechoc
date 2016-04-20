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
				<form action="">
					<input type="checkbox" name="check" value="Les monuments"> Les monuments <br>
					<input type="checkbox" name="check" value="Les musées"> Les musées <br>
					<input type="checkbox" name="check" value="Faire une balade"> Faire une balade <br>
					<input type="checkbox" name="check" value="Admirer le panorama de paris"> Admirer le panorama de paris <br>
					<input type="checkbox" name="check" value="à 200m"> à 200m <br>
					<input type="checkbox" name="check" value="à 500m"> à 500m <br>
					<div><input class="okBtn" type="submit" name="confirm" value="OK"></div>
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



