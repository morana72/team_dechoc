// var map;

// Déclaclaration du rayon
var radiusCircle = 200; //valeur en mètre


function initMap() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var place = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: place.lat, lng:place.lng},
    zoom: 17
  });

  var infoWindow = new google.maps.InfoWindow({map: map});
  // Géolocalisation
      var userPosition = new google.maps.Marker({
        map:map,
        position: new google.maps.LatLng(place.lat, place.lng),
        title: 'ici'
      });

      // Changement d'icone du marqueur
      var image = '../../img/usericon.png';
      var beachMarker = new google.maps.Marker({
      position: {lat: -33.890, lng: 151.274},
      map: map,
      icon: image
    });

      // ajout du cercle
      var circleUser = new google.maps.Circle({
        map:map,
        radius: radiusCircle,
        fillColor: '#AEEEEE'
      });

      circleUser.bindTo('center', userPosition, 'position')


      // Calcul de distance
      function getLocation() {
            navigator.geolocation.getCurrentPosition(
            function(position) {
                var latLngA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                var latLngB = new google.maps.LatLng(40.778721618334295, -73.96648406982422);
                var distance = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
                console.log('distance:'+ distance);//In metres
            },
            function() {
                alert("geolocation not supported!!");
            }
    );
    getLocation();
}






  // Fenêtre d'info 
      // infoWindow.setPosition(place);
      // infoWindow.setContent('Vous êtes ici!!!!');
      // map.setCenter(place);
      var params = {
        latlng : place.lat + ',' + place.lng
      };


      // console.log(params);
      var url = encodeURI('https//maps.googleapis.com/maps/api/geocode/json');
      $.ajax({
        url: url, 
        data: params,
        success: function(data){
                  console.log(data);
        },
        dataType: 'json',
        error: function(dataError) {
          console.log(dataError);
        },
        complete: function(dataComplete) {
          console.log(dataComplete);
        }
        });


    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });

    // var marker = new google.maps.Marker({
    // map: map,
    // // Define the place with a location, and a query string.
    // place: {
    //   location: {lat: -33.8666, lng: 151.1958},
    //   query: 'paris'

  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

}

function handleLocationError(browserHasGeolocation, infoWindow, place) {
  infoWindow.setPosition(place);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: on dirait que ça marche pas' :
                        'Error: Your browser doesn\'t support geolocation.');
}





 // var marker = new google.maps.Marker({
 //    position: place,
 //    map: map,
 //    title: 'Hello World!'
 //  });

// 1 : rentrer l'url https://maps.googleapis.com/maps/api/geocode/json?latlng=-34.397,150.644 dans une requete Ajax
// 2 : dans votre function(dataresponse) {
  // var codePostal = dataResponse.results.address_components[4].long_name;
  // console.log(codePostal); // 75014
//}

// 3 : recommencer une ajax en envoyant codePostal dans un post à destination de : public/monuments/[:code_postal]

// cercle engloban

// function drawMarker( marker, origine, rayon){
//   // calcul distance
//   var distance = google.maps.geometry.spherical.computeDistanceBetween( origine, place.getPosition());
//   // ici on joue sur la couleur du marker
//   var icone = (distance > rayon) ? oRedIcone : oGreenIcone;
//   // affectation icone qui va bien
//   marker.setOptions({'icon' : icone});
//   // ajout distance au survol
//   var km = (distance/1000).toFixed(3) +' km';
//   marker.setOptions({'title' : km});
// }
// Working on firefox!





// function initMap() {
// 	map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: 48.8590632, lng: 2.3454097},
//     zoom: 16
//   });

// var infoWindow = new google.maps.InfoWindow({map: map});
 
// }

// function initMap() {

// 	map = new google.maps.Map(document.getElementById('map'),{
// 		center: {lat: 48.856614, lng: 2.352222},
// 		zoom: 19,
// 		mapTypeId: google.maps.MapTypeId.ROADMAP

// 	});
// }

// // initialisition fenetre d'info

// function openInfoWindows(marker, map, infoWindow, html){
// 	google.maps.event.addListener(marker, 'click', function(){
// 		infoWindow.setContent(html);
// 		infoWindow.open(map, marker);
// 	})
// }
// 	if (navigator.geolocation)
// 	  var watchId = navigator.geolocation.watchPosition(successCallback,
// 	                            null,
// 	                            {enableHighAccuracy:true, maximumAge: 5000});
// 	else
// 	  alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");

// 	function successCallback(position){
// 		// if (position.coords.accuracy < 1000){
// 		// Affichage du marqueur et du Polyline
// 			if (marker != undefined) {
// 				marker.setMap(null);
// 			}
// 			  map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude, position.coords.accuracy));
// 			  var marker = new google.maps.Marker({
// 			    position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude, position.coords.accuracy),
// 			    map: map
// 			  });
// 			// }
// 	};

