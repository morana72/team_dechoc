$(document).ready(function(){
		
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(48.8573512,2.3589356,13),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

}
)};












		
	// $('body').append('<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAqctRqoMksFNdrfLd256XhtouIJU-hMw&libraries=visualization&callback=initMap" async defer></script>')

	// // Initialisation des fenêtres infoWindow
	// var myWindow = new google.maps.InfoWindow({
	// 	maxWidth: 350
	// })

	// // Création d'un  marquer Google Map
	// var marker = new google.maps.Marker({
	//     map: map,
	//     position: {lat: 48.8635533, lng: 2.3473353},
	//     title: 'Hello World!'
	// });



// 	$.ajax({
// 		type: 'GET',

// 		url: 'http://opendata.paris.fr/api/records/1.0/search/?dataset=parcsetjardinsparis2010',
// 		success: function(data){

// 			for(var i=0; i < data.length; i++){
// 				console.log(data[i]);
// 					var marker = new google.maps.Marker({
// 				    map: map,
// 				    position: {lat: data[i].position.lat, lng: data[i].position.lng},
// 				    title: 'il ya '+data[i].available_bikes+'velo'
// 				});
// 				openInfoWindows(marker, map, myWindow, '<h1>'+data[i].name+'</h1><p>nombre de vélos dispo :'+data[i].available_bikes+'/'+ data[i].bike_stands+'</p>');
// 			}
// 			console.log(data);
// 		}
// 	})
