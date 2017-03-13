            var map;
            var markers;
            var markerArray=[];
            var bounds = new google.maps.LatLngBounds();
            var drawingManager;

             function initialize(){
                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(40.573436, -105.086547),
                    zoom:9,
                    mapTypeId: google.maps.MapTypeId.HYBRID,
                    draggableCursor: 'url(http://maps.google.com/mapfiles/openhand.cur), move',
                    streetViewControl:false
                }
                map = new google.maps.Map(mapCanvas,mapOptions);

                var newLatLng = {lat:40.573436, lng:-105.086547};

                    
				// name, long lati epoch_time_From epoch_time_To low mid high	


                markers = [
                    ['markers1', 40.5734,-105.0865,1443034698,1443034698,100,200, 700],
                    ['markers2', 41.0735,-104.0000,1443134698,1443134698,200,400, 900],
                    ['markers3', 41.2735,-104.0022,1443234698,1443234698,200,600, 700],
                    ['markers4', 41.4935,-104.0044,1443234698,1443234698,20,455, 740],
                    ['markers5', 41.6735,-104.0066,1443434698,1443434698,230,550, 800],
                    ['markers6', 41.8735,-104.0088,1443534698,1445842530,100,666, 950],
                    ['markers7', 41.9935,-104.0468,1443634698,1443634698,111,400, 700],
                    ['markers8', 41.0735,-104.0868,1443734698,1445842530,222,444, 777],
                    ['markers9', 41.2735,-104.0868,1443834698,1443834698,22,111, 999],
                    ['markers10', 41.4735,-104.4868,1443934698,1443934698,11,444, 1000],
                    ['markers11', 41.6735,-104.4868,1444134698,1444134698,234,432, 998],
                    ['markers12', 41.8735,-104.4868,1444234698,1444234698,210,555, 700],
                    ['markers13', 41.0735,-104.4868,1444234698,1444234698,200,400, 700],
                    ['markers14', 41.2735,-104.7868,1444434698,1444434698,200,400, 700],
                    ['markers15', 41.4735,-104.7868,1444534698,1445842530,120,456, 789],
                    ['markers16', 41.6735,-104.7868,1444634698,1445842530,55,666, 1200],
                    ['markers17', 41.8735,-104.1868,1444734698,1445842530,200,400, 700],
                    ['markers18', 41.0735,-104.2868,1444834698,1445842530,99,330, 700],
                    ['markers19', 41.1735,-104.3868,1444934698,1445842530,200,400, 998],
                    ['markers20', 41.2735,-104.4868,1445134698,1445842530,200,374, 800],
                    ['markers21', 41.3735,-104.5868,1445134698,1445842530,200,775, 650],
                    ['markers22', 41.4735,-104.6868,1445134698,1445842530,200,880, 900],
                    ['markers23', 41.5735,-104.7868,1445134698,1445842530,200,990, 1200],
                    ['markers24', 41.6735,-104.8868,1445134698,1445842530,200,770, 1300],
                    ['markers25', 41.7735,-104.9868,1445134698,1445842530,200,450, 1400],
                    ['markers26', 41.8735,-104.7868,1445134698,1445842530,200,700, 1230],
                    ['markers27', 41.9735,-104.2868,1445134698,1445842530,200,500, 1200],

                    // // curve
                    // ['markers1', 40.573436,-105.086547,1442134698,1443034698],
                    // ['markers2', 41.0735,-104.6000,1442234698,1443034698],
                    // ['markers2', 41.2735,-104.6022,1442334698,1443034698],
                    // ['markers2', 41.4935,-104.6044,1442434698,1443034698],
                    // ['markers2', 41.6735,-104.6066,1442534698,1443034698],
                    // ['markers2', 41.8735,-104.6088,1442634698,1443034698],
                    // ['markers2', 41.9935,-104.6468,1442734698,1443034698],
                    // ['markers2', 41.0735,-104.6868,1442834698,1443034698],
                    // ['markers2', 41.2735,-104.6868,1442934698,1443034698],
                    // ['markers2', 41.4735,-104.6868,1441034698,1443034698],
                    // ['markers2', 41.6735,-104.8868,1441134698,1443034698],
                    // ['markers2', 41.8735,-104.8868,1441234698,1443034698],
                    // ['markers2', 41.0735,-104.8868,1441334698,1443034698],
                    // ['markers2', 41.2735,-104.1868,1441434698,1443034698],
                    // ['markers2', 41.4735,-104.2868,1441534698,1443034698],
                    // ['markers2', 41.6735,-104.1868,1441634698,1443034698],
                    // ['markers2', 41.8735,-104.7868,1441734698,1443034698],
                    // ['markers2', 41.0735,-104.8868,1443834698,1443034698],
                    // ['markers2', 41.1735,-104.9868,1443934698,1443034698],
                    // ['markers2', 41.2735,-104.9868,1440134698,1443034698],
                    // ['markers2', 41.3735,-104.1868,1440234698,1443034698],
                    // ['markers2', 41.4735,-104.1868,1440334698,1443034698],
                    // ['markers2', 41.5735,-104.1868,1440434698,1443034698],
                    // ['markers2', 41.6735,-104.0868,1440534698,1443034698],
                    // ['markers2', 41.7735,-104.3868,1440634698,1443034698],
                    // ['markers2', 41.8735,-104.1868,1440734698,1443034698],
                    // ['markers2', 41.9735,-104.8868,1440834698,1443034698],

                    //                     ['markers1', 40.573436,-105.086547],
                    // ['markers2', 41.0735,-105.6000,1442234698,1442234698],
                    // ['markers2', 41.2735,-105.6022,1442234698,1442234698],
                    // ['markers2', 41.4935,-105.6044,1442234698,1442234698],
                    // ['markers2', 41.6735,-105.6066,1442234698,1442234698],
                    // ['markers2', 41.8735,-105.6088,1442234698,1442234698],
                    // ['markers2', 41.9935,-105.6468,1442234698,1442234698],
                    // ['markers2', 41.0735,-105.6868,1442234698,1442234698],
                    // ['markers2', 41.2735,-105.6868,1442234698,1442234698],
                    // ['markers2', 41.4735,-105.6868,1442234698,1442234698],
                    // ['markers2', 41.6735,-105.8868,1442234698,1442234698],
                    // ['markers2', 41.8735,-105.8868,1442234698,1442234698],
                    // ['markers2', 41.0735,-105.8868,1442234698,1442234698],
                    // ['markers2', 41.2735,-105.1868,1442234698,1442234698],
                    // ['markers2', 41.4735,-105.2868,1442234698,1442234698],
                    // ['markers2', 41.6735,-105.1868,1442234698,1442234698],
                    // ['markers2', 41.8735,-105.7868,1442234698,1442234698],
                    // ['markers2', 41.0735,-105.8868,1442234698,1442234698],
                    // ['markers2', 41.1735,-105.9868,1442234698,1442234698],
                    // ['markers2', 41.2735,-105.9868,1442234698,1442234698],
                    // ['markers2', 41.3735,-105.1868,1442234698,1442234698],
                    // ['markers2', 41.4735,-105.1868,1442234698,1442234698],
                    // ['markers2', 41.5735,-105.1868,1442234698,1442234698],
                    // ['markers2', 41.6735,-105.0868,1442234698,1442234698],
                    // ['markers2', 41.7735,-105.3868,1442234698,1442234698],
                    // ['markers2', 41.8735,-105.1868,1442234698,1442234698],
                    // ['markers2', 41.9735,-105.8868,1442234698,1442234698],

                    //                                         ['markers1', 40.573436,-105.086547,1442234698,1442234698],
                    // ['markers2', 41.0735,-106.6000,1442234698,1442234698],
                    // ['markers2', 41.2735,-106.6022,1442234698,1442234698],
                    // ['markers2', 41.4935,-106.6044,1442234698,1442234698],
                    // ['markers2', 41.6735,-106.6066,1442234698,1442234698],
                    // ['markers2', 41.8735,-106.6088,1442234698,1442234698],
                    // ['markers2', 41.9935,-106.6468,1442234698,1442234698],
                    // ['markers2', 41.0735,-106.6868,1442234698,1442234698],
                    // ['markers2', 41.2735,-106.6868,1442234698,1442234698],
                    // ['markers2', 41.4735,-106.6868,1442234698,1442234698],
                    // ['markers2', 41.6735,-106.8868,1442234698,1442234698],
                    // ['markers2', 41.8735,-106.8868,1442234698,1442234698],
                    // ['markers2', 41.0735,-106.8868,1442234698,1442234698],
                    // ['markers2', 41.2735,-106.1868,1442234698,1442234698],
                    // ['markers2', 41.4735,-106.2868,1442234698,1442234698],
                    // ['markers2', 41.6735,-106.1868,1442234698,1442234698],
                    // ['markers2', 41.8735,-106.7868,1442234698,1442234698],
                    // ['markers2', 41.0735,-106.8868,1442234698,1442234698],
                    // ['markers2', 41.1735,-106.9868,1442234698,1442234698],
                    // ['markers2', 41.2735,-106.9868,1442234698,1442234698],
                    // ['markers2', 41.3735,-106.1868,1442234698,1442234698],
                    // ['markers2', 41.4735,-106.1868,1442234698,1442234698],
                    // ['markers2', 41.5735,-106.1868,1442234698,1442234698],
                    // ['markers2', 41.6735,-106.0868,1442234698,1442234698],
                    // ['markers2', 41.7735,-106.3868,1442234698,1442234698],
                    // ['markers2', 41.8735,-106.1868,1442234698,1442234698],
                    // ['markers2', 41.9735,-106.8868,1442234698,1442234698],

                    //                                                             ['markers1', 40.573436,-105.086547,,1442234698,1442234698],
                    // ['markers2', 41.0735,-107.6000,144410000,144410000],
                    // ['markers2', 41.2735,-107.6022,144401111,144400000],
                    // ['markers2', 41.4935,-107.6044,144400000,144400000],
                    // ['markers2', 41.6735,-107.6066,144396666,144396666],
                    // ['markers2', 41.8735,-107.6088,144395555,144395555],
                    // ['markers2', 41.9935,-107.6468,144389999,144389999],
                    // ['markers2', 41.0735,-107.6868,144388888,144388888],
                    // ['markers2', 41.2735,-107.6868,144387777,144387777],
                    // ['markers2', 41.4735,-107.6868,144386666,144386666],
                    // ['markers2', 41.6735,-107.8868,144385555,144385555],
                    // ['markers2', 41.8735,-107.8868,144379999,144375555],
                    // ['markers2', 41.0735,-107.8868,144369999,144369999],
                    // ['markers2', 41.2735,-107.1868,144368888,144368888],
                    // ['markers2', 41.4735,-107.2868,144367777,144367777],
                    // ['markers2', 41.6735,-107.1868,144366666,144366666],
                    // ['markers2', 41.8735,-107.7868,144365555,144365555],
                    // ['markers2', 41.0735,-107.8868,144359999,144359999],
                    // ['markers2', 41.1735,-107.9868,144358888,144358888],
                    // ['markers2', 41.2735,-107.9868,144357777,144357777],
                    // ['markers2', 41.3735,-107.1868,144356666,144356666],
                    // ['markers2', 41.4735,-107.1868,144355555,144355555],
                    // ['markers2', 41.5735,-107.1868,144349999,144349999],
                    // ['markers2', 41.6735,-107.0868,144348888,144348888],
                    // ['markers2', 41.7735,-107.3868,144347777,144347777],
                    // ['markers2', 41.8735,-107.1868,144346666,144346666],
                    // ['markers2', 41.9735,-107.8868,144345555,144345555],

                ];

                // reference for multiple markers; http://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/

                                //pop up info window

                // Display multiple markers on a map
                var infoWindow = new google.maps.InfoWindow(), marker, i;
                // var infoWindow = new google.maps.InfoWindow({

                // });

                // Loop through our array of markers & place each one on the map  
                for( i = 0; i < markers.length; i++ ) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0]
                    });
                    markerArray.push(marker);
                    // Allow each marker to have an info window    
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            // console.print(hah);
                            infoWindow.setContent('<div id="content" >'+
                     '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Data title</h1>'+
                    '<div id="bodyContent">'+
                    '<p><b>Location:</b>' + 'longtitude:'+ markers[i][1]+' latitude:'+markers[i][2]+'</p>' +
                    '<p><b>Time:</b>' + '1/20/2015' + '   8:00am - 8:30am'+'</p>' +
                    '<p><b>Avg CH4:</b>' + '300' +'</p>' +
                    '<p><b>Avg Wind Speed:</b>' + '400' +'</p>' +
                    '<p><b>Low:</b>' + markers[i][5] +'</p>' +
                    '<p><b>Mid:</b>' + markers[i][6] +'</p>' +
                    '<p><b>High:</b>' + markers[i][7] +'</p>' +
                    '<p><b>Download:</b> <a href="http://www.cs.colostate.edu/EDF/fleetFeet/fleetFeet.php">'+
                    'bloc1</a> '+
                    '</p>'+
                    '</div>'+
                    '</div>');
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));

                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                }

                //drawing tools 
                // 
                // 
                drawingManager = new google.maps.drawing.DrawingManager({
                drawingMode: google.maps.drawing.OverlayType.MARKER,
                drawingControl: true,
                drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_CENTER,
                drawingModes: [
                google.maps.drawing.OverlayType.POLYGON,
                // google.maps.drawing.OverlayType.MARKER,
                // google.maps.drawing.OverlayType.CIRCLE,

                // google.maps.drawing.OverlayType.POLYLINE
                // google.maps.drawing.OverlayType.RECTANGLE
                ]
                },
                // markerOptions: {icon: 'images/beachflag.png'},
                circleOptions: {
                  fillColor: '#ffff00',
                  fillOpacity: 1,
                  strokeWeight: 5,
                  clickable: false,
                  editable: true,
                  zIndex: 1
                },
                polygonOptions:{
                  draggable:true,
                  editable:true,
                  fillColor:"red",
                  fillOpacity:0.65,
                  geodesic:true,
                  strokeColor:"red"
                }

              });
            drawingManager.setMap(map);

            }
         google.maps.event.addDomListener(window, 'load', initialize);

        //  google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
        //                 // hide your loading bar
        //           var tempMarkerArray=markerArray;
        //           console.log("jasd");

        //           for( i = 0; i < markerArray.length; i++ ) {
        //             markerArray[i].setMap(null);
        //           }
        //           markerArray=[];
        //           var freqData=[];

        //           if(document.getElementById("dashboard")!=null)
        //              document.getElementById("dashboard").remove();

        //           document.getElementById("dashboard0").insertAdjacentHTML('afterend','<div id="dashboard"></div>'); 
        //           // map.set();
        //           //update bar chart
        //           var path =map.getPath();
        //           for(var i=0; i<tempMarkerArray.length;i++){
        //                 if(google.maps.geometry.poly.containsLocation({lat:tempMarkerArray[i].getPosition().lat(),lng:tempMarkerArray[i].getPosition().lng()}, path)){
        //                     markerArray.push(tempMarkerArray[i]);
        //                     tempMarkerArray[i].setMap(map);

        //                 }else{

        //                 }
                            
        //   	};
        // });