<?php $this->layout('layout', ['title' => 'Musees', 'id' => 'musees']) ?>
<?php $this->start('principal') ?>
    <main>

        <section class="fiche">
            <h2>Les Musées</h2>
            <div id="map_list"></div>

            <?php foreach($endroits as $key => $value) : ?>
                <!-- id=<?=$value['titre']?> -->
                <article class="liste">

                    <h3><?php echo $value['titre'] ?></h3>
                    <!-- donnees json-->
                    <div class="listeimg">
                        <!-- image -->
                        <img src="img/img_musees/<?php echo $value['photo'] ?>" alt="<?php echo $value['photo'] ?>"/>
                    </div>
                    <h4><?php echo $value['descriptif_mini'] ?></h4>
                    <p><?php echo $value['adresse'] ?></p><br>
                    <p><?php echo $value['CP'] ?></p><br>
                    <!-- <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a> -->

                </article>
            <?php endforeach; ?>

        </section>
    </main>
<?php $this->stop('principal') ?>