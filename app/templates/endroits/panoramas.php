
<?php $this->layout('layout', ['title' => 'Panoramas', 'id' => 'Panoramas']) ?>
<?php $this->start('principal') ?>
<main>
    <section class="fiche">
        <h2>Les Panoramas</h2>
        <div id="map_list"></div>


        <?php foreach($panoramas as $key => $value) : ?>

            <article class="liste">

                <h3><?php echo $value['titre'] ?></h3>
                <!-- donnees json-->
                <div class="listeimg">
                    <!-- image -->
                <img src="<?= $this->assetUrl("img/img_panoramas/$value[photo]")?>" alt="<?php echo $value['photo'] ?>"/>
                </div>
                <h4><?php echo $value['descriptif_mini'] ?></h4>
                <p><?php echo $value['adresse'] ?></p><br>
                <p><?php echo $value['CP'] ?></p><br>


                </div>
                <a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>

            </article>

        <?php endforeach; ?>

    </section>
    <script type="text/javascript" src="<?= $this->assetUrl("js/script_panoramas.js")?>"></script>


</main>
<?php $this->stop('principal') ?>

<?php $this->start('scripts_persos') ?>
<script>
    window.onload = function () {
        LoadMap();
    }
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
            url:'http:<?= $this->assetUrl('json/liste-panoramas.json') ?>',
            success: function(data){

                for (var i = 0; i < data.length; i++) {


                    // VARIABLE donnees pour json data /!\ necessaire
                    var donnees = data[i];
                    var myLatlng = new google.maps.LatLng(donnees.latitude, donnees.longitude);

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        icon: 'assets/img/panoramicview.png',
                        title: donnees.titre
                    });

                    //Attach click event to the marker.
                    (function (marker, donnees) {
                        google.maps.event.addListener(marker, "click", function (e) {
                            //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                            infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem'><strong>" +donnees.titre+ "</strong><br><img src='assets/img/img_panoramas/"+donnees.photo+"'/><br><p>"+donnees.adresse+"<br></p></div>");
                            infoWindow.open(map, marker);
                        });
                    })(marker, donnees);
                    console.log(donnees.photo);
                }


            }


        });

    }

</script>
<?php $this->stop('scripts_persos') ?>
