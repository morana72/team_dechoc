<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap-theme.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
<header class="container">
	<div class="row">

	</div>
</header>
<div class="content container">
	<h1><?= $this->e($title) ?></h1>
	<section>
		<?= $this->section('principal') ?>
	</section>

</div>
<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
</body>
</html>