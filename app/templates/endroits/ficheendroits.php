<?php $this->layout('layout', ['title' => 'Details Endroit', 'id' => 'ficheendroits']) ?>
<?php $this->start('principal') ?>

    <main>
        <section class="fiche">
            <h2>Arc de Triomphe</h2>
            <article>
                <img src="<?= $this->assetUrl('img/img_monuments/Arc-de-Triomphe.jpg') ?>">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10496.73119300548!2d2.2950275!3d48.8737917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9b5676e112e643d!2sArc+de+Triomphe!5e0!3m2!1sfr!2sfr!4v1460117721453" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </article>
            <article>
                <h3>Descriptif</h3>
                <p>Situé sur la place de l’Étoile, en haut de l’avenue des Champs-Élysées, l’Arc de triomphe est le plus grand arc du monde. Sa construction date de 1806, à la demande de Napoléon, pour célébrer la victoire de l’empereur à Austerlitz. </p>
            </article>
            <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>

        </section>
    </main>

<?php $this->stop('principal') ?>