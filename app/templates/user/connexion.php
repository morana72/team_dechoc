<?php $this->layout('layout', ['title' => 'Connexion', 'id' => 'connexion']) ?>
<?php $this->start('principal') ?>
	<main>
		<h1>Connexion</h1>
		<form id="connexion" method="POST" action="<?= $this->url('connexion') ?>">
			<label>Pseudo</label>
			<input type="text" name="email">
			<label>Mot de Passe</label>
			<input type="text" name="mdp">
			<input type="submit" name="connexion">
		</form>
	</main>
<?php $this->stop('principal') ?>