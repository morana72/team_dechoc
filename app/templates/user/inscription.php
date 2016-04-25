<?php $this->layout('layout', ['title' => 'Inscription', 'id' => 'inscription']) ?>
<?php $this->start('principal') ?>
<main>
    <?php if(!empty($msg) && !empty($type)) : ?>
        <div class="alert-<?= $type ?>"> <?= $msg ?></div>
    <?php endif; ?>
    <h2 class="h2_inscription">Pour une utilisation optimale du site il est préférable de s'inscrire</h2>
    <form method="POST" action="<?= $this->url('inscription_post') ?>">
        <label>Nom</label>
        <input  type="text" name="familyName">
        <label>Prénom</label>
        <input type="text" name="firstName">
        <label>Pseudo</label>
        <input type="text" name="pseudo">
        <label>Email</label>
        <input type="email" name="email" placeholder="ex: yourAdress@mail.com">
        <label>Mot de Passe</label>
        <input type="text" name="mdp" placeholder="ex: AbcDef45">
        <input type="submit" name="envoi">
    </form>
</main>
<!-- <?php var_dump($_GET);?> -->
<?php $this->stop('principal') ?>