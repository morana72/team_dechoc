<?php $this->layout('layout', ['title' => 'Accueil', 'id' => 'index']) ?>

<?php $this->start('principal') ?>
<main>
	
	<section class="lo_formulaire">

		<section>
			<article>
				<h2 class="lo_h2">Ce que je veux faire ou visiter: </h2>
				<?php //if(!empty($this->e($msg))) : ?>
	
				<?php// endif; ?>
				 <!--Formulaire qui sera placé sur la carte avec un fond blanc transparent -->
				 <form id="formulaire">
					<input type="checkbox" id="monuments" name="monuments" value="monuments">  Les monuments <br>
					<input type="checkbox" id="musees" name="musees" value="musees">  Les musées <br>
					<input type="checkbox" id="galerie" name="galerie" value="galerie">  Passages couverts <br>
					<input type="checkbox" id="panoramas" name="panoramas" value="panoramas">  Admirer le panorama de Paris <br>
                     <!--<input type="radio" class="rayon" name="rayon" value="500">  à 500m <br>-->
                    <!--<input type="radio" class="rayon" name="rayon" value="200">  à 200m <br>-->
					<div><input class="okBtn" type="submit"  value="OK"></div>
				</form>
			</article>
			<article id="map_list"></article>
		</section>

		<!-- ______________________Section pub_____________________ -->
		
		<section class="pub">
			<h2>Notre séléction du mois:<br> découvrez Paris autrement!</h2>
			<div class="listeimg">
			<a href="#"><img src="<?= $this->assetUrl('img/4-roues-sous-un-parapluie.jpg') ?>" alt="4 roues"></a>
			<a href="#"><img src="<?= $this->assetUrl('img/train-bleu.jpg') ?>" alt="petit train bleu"></a>
			<a href="#"><img src="<?= $this->assetUrl('img/ballon.jpg') ?>" alt="ballon"></a>
			</div>
		</section>
</main>
<script>
	function writeAddressName(latLng) {
		var geocoder = new google.maps.Geocoder();
		geocoder.geocode({
				"location": latLng
			},
			function(results, status) {
				if (status == google.maps.GeocoderStatus.OK)
					document.getElementById("address").innerHTML = results[0].formatted_address;
				else
					document.getElementById("error").innerHTML += "Unable to retrieve your address" + "<br />";
			});
	}


	function geolocationSuccess(position) {
		var userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		// Write the formatted address
		writeAddressName(userLatLng);

		var myOptions = {
			zoom : 10,
			center : userLatLng,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};

		// Draw the map
		var mapObject = new google.maps.Map(document.getElementById("map_list"), myOptions);
		// Place the marker
		new google.maps.Marker({
			map: mapObject,
			position: userLatLng
		});

		// Draw a circle around the user position to have an idea of the current localization accuracy
		var circle = new google.maps.Circle({
			center: userLatLng,
			radius: position.coords.accuracy,
			map: mapObject,
			fillColor: '#0000FF',
			fillOpacity: 0.2,
			strokeColor: '#0000FF',
			strokeOpacity: 0.2
		});
		mapObject.fitBounds(circle.getBounds());



		var infoWindow = new google.maps.InfoWindow();
		///debut musee
		function afficherMusee(){
			$.ajax({
				url:'http:<?= $this->assetUrl('json/liste-musees-de-france-a-paris.json') ?>',
				success: function(data){

					for (var i = 0; i < data.length; i++) {

						// VARIABLE donnees pour json data /!\ necessaire
						var donnees = data[i].fields;
						var myLatlng = new google.maps.LatLng(donnees.coordonnees_[0], donnees.coordonnees_[1]);


						var marker = new google.maps.Marker({
							position: myLatlng,
							map: mapObject,
							icon: '<?= $this->assetUrl('img/museum_maps.png')?>',
							title: donnees.nom_du_musee
						});

						//Attach click event to the marker.
						(function (marker, donnees) {
							google.maps.event.addListener(marker, "click", function (e) {
								//Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
								infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem'><strong>" +donnees.nom_du_musee+ "</strong><br><p>"+donnees.adr+"<br></p></div>");
								infoWindow.open(mapObject, marker);
							});
						})(marker, donnees);
					}
				}
			});
		}
		///fin musee
		function afficherObjets(URL,ICON,DOSSIERPHOTO){
			$.ajax({
				url: URL ,
				success: function(data){

					for (var i = 0; i < data.length; i++) {

						//console.log(data);

						// VARIABLE donnees pour json data /!\ necessaire
						var donnees = data[i];
						var myLatlng = new google.maps.LatLng(donnees.latitude, donnees.longitude);

						var marker = new google.maps.Marker({
							position: myLatlng,
							map: mapObject,
							icon: ICON,
							title: donnees.titre
						});

						//Attach click event to the marker.
						(function (markerNew, donnees) {
							google.maps.event.addListener(marker, "click", function (e) {
								//Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
								//if(TYPE==false){
								// infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem'><strong>" +donnees.titre+ "</strong><br><p>"+donnees.adresse+"<br></p></div>");
								//}
								//
								infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem;text-align:center'><strong>" +donnees.titre+ "</strong><br><img style = 'width:85%;display:block;margin-left:3rem;margin-right:auto;margin-top:1rem' src='"+DOSSIERPHOTO+"/"+donnees.photo+"'><br><p>"+donnees.adresse+"<br></p></div>");
								// }
								infoWindow.open(mapObject, marker);
							});
						})(marker, donnees);
						//console.log(donnees.photo);
					}

				}
			});
		}


        $('#formulaire').submit(function (event){
                event.preventDefault();
                var checkbox_value = [];
                $(":checkbox").each(function () {

                    if ($(this).is(":checked")) {
                        checkbox_value.push($(this).val());
                    }
                });
                console.info(checkbox_value);

                if(checkbox_value !== 'undefined' +
                    '') {
                    for (var i = 0; i < checkbox_value.length; i++) {

                        if (checkbox_value[i] == 'monuments')
                            afficherObjets('http:<?= $this->assetUrl('json/liste_monuments.json')?>', '<?= $this->assetUrl('img/monument-historique-icon-white-22x22.png')?>', '<?= $this->assetUrl('img/img_monuments')?>');
                        if (checkbox_value[i] == 'musees')
                            afficherMusee();
                        if (checkbox_value[i] == 'galerie')
                            afficherObjets('http:<?= $this->assetUrl('json/liste-passages.json')?>', '<?= $this->assetUrl('img/arch.png')?>', '<?= $this->assetUrl('img/passages')?>');
                        if (checkbox_value[i] == 'panoramas')
                            afficherObjets('http:<?= $this->assetUrl('json/liste-panoramas.json')?>', '<?= $this->assetUrl('img/panoramicview.png')?>', '<?= $this->assetUrl('img/img_panoramas')?>');
                    }
                } else {
                    afficherObjets('http:<?= $this->assetUrl('json/liste_monuments.json')?>','<?= $this->assetUrl('img/monument-historique-icon-white-22x22.png')?>','<?= $this->assetUrl('img/img_monuments')?>');
                    afficherObjets('http:<?= $this->assetUrl('json/liste-panoramas.json')?>','<?= $this->assetUrl('img/panoramicview.png')?>','<?= $this->assetUrl('img/img_panoramas')?>');
                    afficherObjets('http:<?= $this->assetUrl('json/liste-passages.json')?>','<?= $this->assetUrl('img/arch.png')?>','<?= $this->assetUrl('img/passages')?>');
                    afficherMusee();
                }
            });

        }

	function geolocationError(positionError) {
		document.getElementById("error").innerHTML += "Error: " + positionError.message + "<br />";
	}

	function geolocateUser() {
		// If the browser supports the Geolocation API
		if (navigator.geolocation)
		{
			var positionOptions = {
				enableHighAccuracy: true,
				timeout: 10 * 1000 // 10 seconds
			};
			navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, positionOptions);
		}
		else
			document.getElementById("error").innerHTML += "Your browser doesn't support the Geolocation API";
	}

	window.onload = geolocateUser;
</script>
<?php $this->stop('principal') ?>


<?php $this->start('') ?>



