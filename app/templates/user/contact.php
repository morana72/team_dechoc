<?php $this->layout('layout', ['title' => 'Contact', 'id' => 'contact']) ?>
<?php $this->start('principal') ?>

<form id="connexion" method="POST" action="contact.php">

    <p><label>Sujet :</label><input type="text" name="sujet"/></p>
    <p><label>Email :</label><input type="text" name="sujet"/></p>
    <p><label>Message :</label></p>
    <p><textarea name="message"></textarea></p>
    <p><input id="envoi" type="submit" name="envoi" value="Envoyer" /></p>
</form>

<?php $this->stop('principal') ?>