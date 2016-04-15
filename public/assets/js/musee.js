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
							url:'json/liste-musees-de-france-a-paris.json',
							success: function(data){
 
            for (var i = 0; i < data.length; i++) {

        	// $('.liste').append('<article><h3>'+data[i].fields.nom_du_musee+'</h3><p>'+data[i].fields.adr+'</p><br><p>'+data[i].fields.cp+'</p><br><p>'+data[i].fields.sitweb+'</p><br><p>'+data[i].fields.periode_ouverture+'</p></article>');

            
            
            // VARIABLE donnees pour json data /!\ necessaire
            var donnees = data[i].fields; 
            var myLatlng = new google.maps.LatLng(donnees.coordonnees_[0], donnees.coordonnees_[1]);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
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




































