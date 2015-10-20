d3.csv("markers.csv", function (data) {
    drawMarkers(data);
});


function createId(markerInfo) {
    //return markerInfo.id + "" + markerInfo.val;
    return markerInfo.id ;
}

var markers =[];

function drawMarkers(markerData){
    for (var i = 0; i < markerData.length; i++) {
        var marker = new L.marker([markerData[i].lat, markerData[i].lon]);
        marker.bindPopup(createId(markerData[i])).addTo(map);
        markers.push(marker);
    }
}

function removeAllMarkers(){
    for(var i = 0; i < markers.length; i++){
        var marker = markers[i];
        map.removeLayer(marker)
    }
    markers = [];
}
