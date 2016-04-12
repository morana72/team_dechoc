<?php
// je fais appel à ma structure (templates/layout.php) pour avoir le doctype etc..
$this->layout('layout', ['title' => 'Inscription']) ?>
<?php $this->start('principal') ?>
<div class="reaction">
    <p class="etiquette">Inscription</p>
    <form method="post" action="<?= $this->url("inscription") ?>">
        <div class="saisie">
            <div class="user clearfix">
                <div class="prenom">
                    <label for="prenom">Prénom</label>
                    <input id="prenom" value="" name="prenom" type="text" />
                </div>
                <div class="nom">
                    <label for="nom">Nom</label>
                    <input id="nom" value="" name="nom" type="text" />
                </div>
            </div>
            <div class="user clearfix">
                <div class="prenom">
                    <label for="email">Email</label>
                    <input type="text" value="" name="email" >
                </div>
                <div class="prenom">
                    <label for="mdp">Mot de passe</label>
                    <input type="text" value="" name="mdp" >
                </div>
            </div>
            <div class="user clearfix">
                <div class="prenom">
                    <label for="genre">Genre</label>
                    <div class="genre">
                        <input type="radio" value="m" name="genre" >M
                    </div>
                    <div class="genre">
                        <input type="radio" value="f" name="genre" >F
                    </div>
                </div>
                <div class="prenom">
                    <label for="telephone">Telephone</label>
                    <input id="telephone" type="text" value="" name="telephone" >
                </div>
            </div>
            <div class="user clearfix">
                <div class="prenom">
                    <label for="ville">Ville</label>
                    <input id="ville" type="text" value="" name="ville" >
                    <label for="code_postal">Code postal</label>
                    <input type="text" value="" name="code_postal" >
                </div>
                <div class="prenom">
                    <label for="adresse">Adresse</label>
                    <textarea name="adresse"></textarea>
                </div>
            </div>
        </div>
        <p class="etiquette">
            <button type="reset">EFFACER</button>
            <button type="submit" name="envoi">INSCRIPTION</button>
        </p>
    </form>
</div>
<?php $this->stop('principal') ?>

