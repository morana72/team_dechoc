<?php $this->layout('layout', ['title' => 'Profil']) ?>
<?php $this->start('principal') ?>
	<h2>Profil</h2>
	<p>Page du profil</p>
	<p>Bonjour <?= $prenom ?> <?= $nom ?> comment allez-vous ?</p>
<?php $this->stop('principal') ?>

<?php $this->start('pre_footer') ?>
<p>Je suis dans le pre_footer</p>
<?php $this->stop('pre_footer') ?>

<?php $this->start('footer') ?>
<p>Je suis dans le FOOTER</p>
<?php $this->stop('footer') ?>
