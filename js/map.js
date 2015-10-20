var centralLoc = [40.573436, -105.086547];
//var centralLoc = [-41.3058, 174.82082];
//var zoom = 13;
var zoom = 8;


var map = L.map('map').setView(centralLoc, zoom);

L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
    '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    'Imagery © <a href="http://mapbox.com">Mapbox</a>',
    id: 'examples.map-i875mjb7'
}).addTo(map);


//old code


//
//
//function initialize() {
//    var chicago = new google.maps.LatLng(40.573436, -105.086547);
//    var mapOptions = {
//        zoom: 11,
//        center: chicago
//    };
//
//    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
//
//    // var ctaLayer = new google.maps.KmlLayer({
//    //   url: 'http://gmaps-samples.googlecode.com/svn/trunk/ggeoxml/cta.kml'
//    // });
//    // ctaLayer.setMap(map);
//}
//
//google.maps.event.addDomListener(window, 'load', initialize);
//
