<?php $this->layout('layout', ['title' => 'Contact', 'id' => 'contact']) ?>
<?php $this->start('principal') ?>
    <main>
        <form id="contact" method="POST" action="<?= $this->url('SendMessage') ?>">

            <label>Sujet :</label><input type="text" name="sujet"/>
            <label>Email :</label><input type="text" name="email"/>
            <label>Message :</label>
            <textarea name="message"></textarea>
            <input id="envoi" type="submit" name="envoi" value="Envoyer" />

 
        </form>
    </main>
<?php $this->stop('principal') ?>