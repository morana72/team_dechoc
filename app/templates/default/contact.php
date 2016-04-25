<?php $this->layout('layout', ['title' => 'Contact', 'id' => 'contact']) ?>
<?php $this->start('principal') ?>
    <main>
        <form id="contact" method="POST" action="<?= $this->url('contact') ?>">

            <label>Sujet :</label><input type="text" name="sujet"/><br>

            <label>Email :</label><input type="text" name="email"/><br>
            <label>Message :</label>
            <textarea name="message"></textarea></p>
            <input id="envoi" type="submit" name="envoi" value="Envoyer" />


        </form>
    </main>
<?php $this->stop('principal') ?>