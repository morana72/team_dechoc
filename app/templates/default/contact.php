<?php $this->layout('layout', ['title' => 'Contact', 'id' => 'contact']) ?>
<?php $this->start('principal') ?>
    <main>
        <form id="connexion" method="POST" action="<?= $this->url('contact') ?>">>

            <p><label>Sujet :</label><input type="text" name="sujet"/></p>
            <p><label>Email :</label><input type="text" name="sujet"/></p>
            <p><label>Message :</label></p>
            <p><textarea name="message"></textarea></p>
            <p><input id="envoi" type="submit" name="envoi" value="Envoyer" /></p>
        </form>
    </main>
<?php $this->stop('principal') ?>