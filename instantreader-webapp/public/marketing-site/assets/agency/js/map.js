/* ----- Google Map ----- */
if ($("#map").length) {
    function initialize() {
        var locations = [
            ['Bondi Beach', -33.890542, 151.274856, 4],
            ['Coogee Beach', -33.923036, 151.259052, 5],
            ['Cronulla Beach', -34.028249, 151.157507, 3],
            ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
            ['Maroubra Beach', -33.950198, 151.259302, 1]
          ];

        // var mapOptions = {
        //     zoom: 16,
        //     scrollwheel: false,
        //     styles: [{
        //         "featureType": "water",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#e9e9e9"
        //         }, {
        //             "lightness": 17
        //         }]
        //     }, {
        //         "featureType": "landscape",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#f5f5f5"
        //         }, {
        //             "lightness": 20
        //         }]
        //     }, {
        //         "featureType": "road.highway",
        //         "elementType": "geometry.fill",
        //         "stylers": [{
        //             "color": "#ffffff"
        //         }, {
        //             "lightness": 17
        //         }]
        //     }, {
        //         "featureType": "road.highway",
        //         "elementType": "geometry.stroke",
        //         "stylers": [{
        //             "color": "#ffffff"
        //         }, {
        //             "lightness": 29
        //         }, {
        //             "weight": 0.2
        //         }]
        //     }, {
        //         "featureType": "road.arterial",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#ffffff"
        //         }, {
        //             "lightness": 18
        //         }]
        //     }, {
        //         "featureType": "road.local",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#ffffff"
        //         }, {
        //             "lightness": 18
        //         }]
        //     }, {
        //         "featureType": "poi",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#f5f5f5"
        //         }, {
        //             "lightness": 21
        //         }]
        //     }, {
        //         "featureType": "poi.park",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#d5d5d5"
        //         }, {
        //             "lightness": 21
        //         }]
        //     }, {
        //         "elementType": "labels.text.stroke",
        //         "stylers": [{
        //             "visibility": "on"
        //         }, {
        //             "color": "#f8f8f8"
        //         }, {
        //             "lightness": 25
        //         }]
        //     }, {
        //         "elementType": "labels.text.fill",
        //         "stylers": [{
        //             "saturation": 36
        //         }, {
        //             "color": "#222222"
        //         }, {
        //             "lightness": 30
        //         }]
        //     }, {
        //         "elementType": "labels.icon",
        //         "stylers": [{
        //             "visibility": "off"
        //         }]
        //     }, {
        //         "featureType": "transit",
        //         "elementType": "geometry",
        //         "stylers": [{
        //             "color": "#f5f5f5"
        //         }, {
        //             "lightness": 19
        //         }]
        //     }, {
        //         "featureType": "administrative",
        //         "elementType": "geometry.fill",
        //         "stylers": [{
        //             "color": "#fefefe"
        //         }, {
        //             "lightness": 10
        //         }]
        //     }, {
        //         "featureType": "administrative",
        //         "elementType": "geometry.stroke",
        //         "stylers": [{
        //             "color": "#fefefe"
        //         }, {
        //             "lightness": 17
        //         }, {
        //             "weight": 1.2
        //         }]
        //     }],
        //     center: new google.maps.LatLng(-33.92, 151.25), //please add your location here
        // };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(-33.92, 151.25),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        
        var infowindow = new google.maps.InfoWindow();

        // var marker = new google.maps.Marker({
        //     position: map.getCenter(),
        //     //icon: 'images/locating.png', if u want custom
        //     map: map
        // });

        var marker, i;

        for (i=0; i < locations.length; i++){
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
}