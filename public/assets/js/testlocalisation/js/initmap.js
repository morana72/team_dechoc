
	var map;
	
	function initMap() {
	  map = new google.maps.Map(document.getElementById('map'), {
	    // center: {lat: -34.397, lng: 150.644},
	    zoom: 15,
	    mapTypeId: google.maps.MapTypeId.HYBRID,
	  
	  });
	}	

	if (navigator.geolocation)
	  var watchId = navigator.geolocation.watchPosition(successCallback,
	                            null,
	                            {enableHighAccuracy:true, maximumAge: 5000});
	else
	  alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");

	function successCallback(position){
		// if (position.coords.accuracy < 1000){
		// Affichage du marqueur et du Polyline
			if (marker != undefined) {
				marker.setMap(null);
			}
			  map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude, position.coords.accuracy));
			  var marker = new google.maps.Marker({
			    position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude, position.coords.accuracy), 
			    map: map
			  }); 
			// }
	};