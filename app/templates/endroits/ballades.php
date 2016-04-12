<?php $this->layout('layout', ['title' => 'Ballades', 'id' => 'ballades']) ?>
<?php $this->start('principal') ?>
<main>
    <section class="fiche">
        <h2>Les Balades</h2>
        <article class="carte_liste">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10496.73119300548!2d2.2950275!3d48.8737917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9b5676e112e643d!2sArc+de+Triomphe!5e0!3m2!1sfr!2sfr!4v1460117721453" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </article>
        <article class="liste">
            <h3>Musee d'histoire naturelle</h3>
            <div class="listeimg">
                <img src="<?= $this->assetUrl('img/img_musees/Musee_de_Montmartre.jpg') ?>"><br>
            </div>
            <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>
        </article>

        <article class="liste">
            <h3>Aquarium de Porte Dorée</h3>
            <div class="listeimg">
                <img src="<?= $this->assetUrl('img/img_musees/aquaruim_porte_doree.jpg') ?>"><br>
            </div>
            <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>
        </article>

        <article class="liste">
            <h3>Musee Carnavalet</h3>
            <div class="listeimg">
                <img src="<?= $this->assetUrl('img/img_musees/Carnavalet.JPG') ?>"><br>
            </div>
            <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>
        </article>

        <article class="liste">
            <h3>Crypte Archeologique</h3>
            <div class="listeimg">
                <img src="<?= $this->assetUrl('img/img_musees/crypte_archeologique.JPG') ?>"><br>
            </div>
            <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>
        </article>

    </section>
</main>
<?php $this->stop('principal') ?>