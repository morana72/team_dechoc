<?php $this->layout('layout', ['title' => 'About', 'id' => 'About']) ?>
<?php $this->start('principal') ?>
    <main>

        <section class="fiche">
            <h2>Qui somme nous</h2>
            <h3>Team de choc</h3>

            <img src="<?= $this->assetUrl("img/webmaster.jpg")?>" alt="webmaster"/>

            <p>Nous avons donnés toutes nos forces pour mettre en place ce projet.</p><br>

            <p>Nous esperons qu'il va faciliter la vie des touristes en quête de decouvrir Paris et toute sa beauté</p>

            <img src="<?= $this->assetUrl("img/webmaster-tools.jpg")?>" alt="equipe"/>

        </section>
    </main>

<?php $this->stop('principal') ?>