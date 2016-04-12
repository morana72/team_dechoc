<?php $this->layout('layout', ['title' => 'Accueil', 'id' => 'index']) ?>

<?php $this->start('principal') ?>
<main>
	<h1 class="lo_h1">Paris Online</h1>
	<h2 class="lo_h2">Tout paris à portée de main</h2>
	<section class="lo_formulaire">

		<section>
			<article>
				<h2 class="lo_h2">Ce que je veux faire ou visiter: </h2>

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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.75769506051!2d2.2775174381997907!3d48.85895068070545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1460120343721" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>

		<!-- ______________________Section pub_____________________ -->

		<section class="pub">
			<h2>Notre séléction du mois:<br> découvrez Paris autrement!</h2>
			<a href="#"><img src="img/4-roues-sous-un-parapluie.jpg" alt="4 roues"></a>
		</section>
</main>
<?php $this->stop('principal') ?>
