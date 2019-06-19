/*global alert*/
var locations = [{
    title: "COCO restaurant(matay)",
    loacation: {
        lat: 28.422536,
        lng: 30.772001
    }
}, {
    title: "COCO restaurant(Bani Mazar)",
    loacation: {
        lat: 28.491624,
        lng: 30.801028
    }
}];
//function >> when google map failed to load
function googleError() {
    "use strict";
    alert("failed to load the map ..try again");
}


//function to animate the marker
function toggleBounce(marker) {
    "use strict";
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}

//onclick >> open infowindow for each marker with it's information
for (let i = 0; i < locations.length; i++) {
    function populateInfoWindow(marker, infowindow) {
        "use strict";
        // Check to make sure the infowindow is not already opened on this marker.
        if (infowindow.marker !== marker) {
            infowindow.marker = marker;
            //the content of each window has the location title with foursquare data
            infowindow.setContent('<p>' + marker.title + "</p>");
            infowindow.open(map, marker);
            // Make sure the marker property is cleared if the infowindow is closed.
            infowindow.addListener('closeclick', function () {
                infowindow.setMarker = null;
            });
        }
        //onclick set toggleBounce function to the marker
        toggleBounce(marker);
        setTimeout(function () { //after 700 ms remove the animation
            marker.setAnimation(null);
        }, 700);
    }
}


function initMap() { //init map
    "use strict";
    var map = new google.maps.Map(document.getElementById('map'), { //options of the map
        zoom: 11,
        center: { //center of the map
            lat: 28.469971,
            lng: 30.785449
        },
        styles :[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "landscape",
    "stylers": [
      {
        "color": "#202020"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#263c3f"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6b9a76"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#38414e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#212a37"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9ca5b3"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#1f2835"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#f3d19c"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2f3948"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "water",
    "stylers": [
      {
        "color": "#426068"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#515c6d"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  }
]
    });


    var largeInfowindow = new google.maps.InfoWindow();
    //adding marker to each location 
    for (let i = 0; i < locations.length; i++) {
        var marker = new google.maps.Marker({
            position: locations[i].loacation,
            map: map,
            title: locations[i].title,
            animation: google.maps.Animation.DROP
        });
        marker.addListener('click', function () {
            populateInfoWindow(this, largeInfowindow);
        });

    }
}