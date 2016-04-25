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
                            url:'json/liste-musees-de-france-a-paris.json',
                            success: function(data){
 
            for (var i = 0; i < data.length; i++) {     
            
            // VARIABLE donnees pour json data /!\ necessaire
            var donnees = data[i].fields; 
            var myLatlng = new google.maps.LatLng(donnees.coordonnees_[0], donnees.coordonnees_[1]);

            
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: mapObject,
                icon: 'img/museum_maps.png',
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
            console.log(data[i]);
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
                    infoWindow.setContent("<div style = 'width:250px;min-height:25px;font-size:1.3rem'><strong>" +donnees.titre+ "</strong><br><img src='img/"+DOSSIERPHOTO+"/"+donnees.photo+"'/><br><p>"+donnees.adresse+"<br></p></div>");
                 // }
                    infoWindow.open(mapObject, marker);
                    });
                })(marker, donnees);
                 //console.log(donnees.photo);
                }
                  
                }
         });   
}
  afficherObjets('json/liste_monuments.json','img/monument-historique-icon-white-22x22.png','img_monuments')
  afficherObjets('json/liste-panoramas.json','img/panoramicview.png','img_panoramas')
  afficherObjets('json/liste-passages.json','img/arch.png','passages')
  afficherMusee()



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