<?php $this->layout('layout', ['title' => 'Inscription', 'id' => 'inscription']) ?>
<?php $this->start('principal') ?>
<main>
    <?php if(!empty($msg) && !empty($type)) : ?>
        <div class="alert-<?= $type ?>"> <?= $msg ?></div>
    <?php endif; ?>
    <h2>Pour une utilisation optimale du site il est préférable de s'inscrire</h2>
    <form method="POST" action="<?= $this->url('inscription_post') ?>">
        <label>Email</label>
        <input type="email" name="email">
        <label>Mot de Passe</label>
        <input type="text" name="mdp">
        <input type="submit" name="envoi">
    </form>
</main>
<?php var_dump($_GET);?>
<?php $this->stop('principal') ?>