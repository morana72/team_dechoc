<?php $this->layout('layout', ['title' => 'Monuments', 'id' => 'Monuments']) ?>
<?php $this->start('principal') ?>
	<main>
		<section class="fiche">
			<h2>Les Monuments</h2>
			<div id="map_list"></div>


			<?php foreach($monuments as $key => $value) : ?>

				<article class="liste">

					<h3><?php echo $value['titre'] ?></h3>
					<!-- donnees json-->
					<div class="listeimg">
						<!-- image -->
						<img src="<?= $this->assetUrl("img/img_monuments/$value[photo]")?>" alt="<?php echo $value['photo'] ?>"/>
					</div>
					<h4><?php echo $value['descriptif_mini'] ?></h4>
					<p><?php echo $value['adresse'] ?></p><br>
					<p><?php echo $value['CP'] ?></p><br>


					</div>
					<a href="#"><i class="fa fa-star"></i>Ajouter à vos favoris</a>

				</article>

			<?php endforeach; ?>

		</section>
		<script type="text/javascript" src="<?= $this->assetUrl("js/script_monuments.js")?>"></script>


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
				url:'http:<?= $this->assetUrl('json/liste_monuments.json') ?>',
				success: function(data){

					for (var i = 0; i < data.length; i++) {

						//console.log(data);

						// $("#modalBody_" + modaux[i]).append('<article><h3>'+data[i].fields.nom_du_musee+'</h3><p>'+data[i].fields.adr+'</p><br><p>'+data[i].fields.cp+'</p><br><p>'+data[i].fields.sitweb+'</p><br><p>'+data[i].fields.periode_ouverture+'</p></article>');



						// VARIABLE donnees pour json data /!\ necessaire
						var donnees = data[i];
						var myLatlng = new google.maps.LatLng(donnees.latitude, donnees.longitude);

						var marker = new google.maps.Marker({
							position: myLatlng,
							map: map,
							icon: 'assets/img/monument-historique-icon-white-22x22.png',
							title: donnees.titre
						});

						//Attach click event to the marker.
						(function (marker, donnees) {
							google.maps.event.addListener(marker, "click", function (e) {
								//Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
								infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem'><strong>" +donnees.titre+ "</strong><br><img src='assets/img/img_monuments/"+donnees.photo+"'/><br><p>"+donnees.adresse+"<br></p></div>");
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