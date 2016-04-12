// Variable globale pour la carte
var map;

// Intialisation de la map avec la fonction initMap()
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 48.8635533, lng: 2.3473353},
    zoom: 13
  });
}
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
  marker.addListener('click', toggleBounce);

}

// Initialisation de la fonction fenêtres d'informations
function openInfoWindows(marker, map, infoWindow, html){
  google.maps.event.addListener(marker, 'click', function(){
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
  })
}
