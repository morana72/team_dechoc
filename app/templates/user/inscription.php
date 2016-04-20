<?php $this->layout('layout', ['title' => 'Inscription', 'id' => 'inscription']) ?>
<?php $this->start('principal') ?>
<main >
    <h1>Hey! Bienvenue !</h1>
    <?php if(!empty($msg) && !empty($type)) : ?>
        <div class="alert-<?= $type ?>"> <?= $msg ?></div>
    <?php endif; ?>
    <h2>Pour une utilisation optimale du site il est préférable de s'inscrire</h2>
    <form method="POST" action="<?= $this->url('inscription_post') ?>">
        <label>Email</label>
        <input type="email" name="email">
        <label>Mot de Passe</label>
        <input type="text" name="mdp">
        <label>Confirmer Mot de Passe</label>
        <input type="text" name="verif_mdp">
        <label>Selectionnez une image (200*200 px jpeg /png)</label>
        <input name="userfile" type="file" />
        <input type="submit" name="envoi">
    </form>
</main>

<?php $this->stop('principal') ?>