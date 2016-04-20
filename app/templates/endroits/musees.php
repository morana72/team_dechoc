<?php $this->layout('layout', ['title' => 'Musees', 'id' => 'liste_musee']) ?>
<?php $this->start('principal') ?>
    <main>
        <section class="fiche">
            <h2>Les Musées</h2>
            <div id="map_list"></div>
            <script>
                var modaux = {};
            </script>
            <?php $i=0; ?>
            <?php foreach($musees as $key => $value) : ?>
                <!-- id=<?=$value['titre']?> -->
                <article class="liste">

                    <h3><?php echo $value['titre'] ?></h3>
                    <!-- donnees json-->
                    <div class="listeimg">
                        <!-- image -->
                        <img src="<?= $this->assetUrl("img/img_musees/$value[photo]")?>" alt="<?php echo $value['photo'] ?>"/>
                    </div>
                    <h4><?php echo $value['descriptif_mini'] ?></h4>
                    <p><?php echo $value['adresse'] ?></p><br>
                    <p><?php echo $value['CP'] ?></p><br>

                    <div class="container">

                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_<?= $value['id'] ?>">plus d'info</button>
                        <script>
                            modaux[<?= $i?>] = <?= $value['id'] ?>;
                        </script>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal_<?= $value['id'] ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $value['titre'] ?></h4>
                                    </div>
                                    <div class="modal-body" id="modalBody_<?= $value['id'] ?>">
                                        <div class="listeimg">
                                            <!-- image -->
                                            <img src="<?= $this->assetUrl("img/img_musees/$value[photo]")?>" alt="<?php echo $value['photo'] ?>"/>
                                        </div>
                                        <p><?php echo $value['descriptif_mini'] ?></p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>

                </article>
                <?php $i++; ?>
            <?php endforeach; ?>

        </section>
    </main>

<?php $this->stop('principal') ?>
<?php $this->start('scripts_persos') ?>
<script>
    window.onload = function () {
        LoadMap();
    };

    function LoadMap() {
        var mapOptions = {
            center: {lat: 48.856614, lng: 2.352222},
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map_list"), mapOptions);

        //Create and open InfoWindow.
        var infoWindow = new google.maps.InfoWindow();

        $.ajax({
            url:'http:<?= $this->assetUrl('json/liste-musees-de-france-a-paris.json') ?>',
            success: function(data){

                for (var i = 0; i < data.length; i++) {



                    $("#modalBody_" + modaux[i]).append('<article><h3>'+data[i].fields.nom_du_musee+'</h3><p>'+data[i].fields.adr+'</p><br><p>'+data[i].fields.cp+'</p><br><p>'+data[i].fields.sitweb+'</p><br><p>'+data[i].fields.periode_ouverture+'</p></article>');



                    // VARIABLE donnees pour json data /!\ necessaire
                    var donnees = data[i].fields;
                    var myLatlng = new google.maps.LatLng(donnees.coordonnees_[0], donnees.coordonnees_[1]);

                    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        icon: iconBase + 'museum_maps.png',
                        title: donnees.nom_du_musee
                    });

                    //Attach click event to the marker.
                    (function (marker, donnees) {
                        google.maps.event.addListener(marker, "click", function (e) {
                            //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                            infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem'><strong>" +donnees.nom_du_musee+ "</strong><br><p>"+donnees.adr+"<br></p></div>");
                           infoWindow.open(map, marker);

                        });
                    })(marker, donnees);
                }

            }


        });

    }

</script>
<?php $this->stop('scripts_persos') ?>
