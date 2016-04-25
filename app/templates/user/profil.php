<?php $this->layout('layout', ['title' => 'Profil', 'id' => 'profil']) ?>
<?php $this->start('principal') ?>
<?php // afficher $_SESSION['membre'] ?>
	<?php debug($_SESSION['membre']); ?>
<?php $this->stop('principal') ?>