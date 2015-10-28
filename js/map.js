            var map;
            var marker;
            var bounds = new google.maps.LatLngBounds();

             function initialize(){
                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(40.573436, -105.086547),
                    zoom:9,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
                map = new google.maps.Map(mapCanvas,mapOptions);

                var newLatLng = {lat:40.573436, lng:-105.086547};


                var markers = [
                    ['markers1', 40.573436,-105.086547],
                    ['markers2', 41.0735,-104.0000],
                    ['markers2', 41.2735,-104.0022],
                    ['markers2', 41.4935,-104.0044],
                    ['markers2', 41.6735,-104.0066],
                    ['markers2', 41.8735,-104.0088],
                    ['markers2', 41.9935,-104.0468],
                    ['markers2', 41.0735,-104.0868],
                    ['markers2', 41.2735,-104.0868],
                    ['markers2', 41.4735,-104.4868],
                    ['markers2', 41.6735,-104.4868],
                    ['markers2', 41.8735,-104.4868],
                    ['markers2', 41.0735,-104.4868],
                    ['markers2', 41.2735,-104.7868],
                    ['markers2', 41.4735,-104.7868],
                    ['markers2', 41.6735,-104.7868],
                    ['markers2', 41.8735,-104.1868],
                    ['markers2', 41.0735,-104.2868],
                    ['markers2', 41.1735,-104.3868],
                    ['markers2', 41.2735,-104.4868],
                    ['markers2', 41.3735,-104.5868],
                    ['markers2', 41.4735,-104.6868],
                    ['markers2', 41.5735,-104.7868],
                    ['markers2', 41.6735,-104.8868],
                    ['markers2', 41.7735,-104.9868],
                    ['markers2', 41.8735,-104.7868],
                    ['markers2', 41.9735,-104.2868],

                    // curve
                    ['markers1', 40.573436,-105.086547],
                    ['markers2', 41.0735,-104.6000],
                    ['markers2', 41.2735,-104.6022],
                    ['markers2', 41.4935,-104.6044],
                    ['markers2', 41.6735,-104.6066],
                    ['markers2', 41.8735,-104.6088],
                    ['markers2', 41.9935,-104.6468],
                    ['markers2', 41.0735,-104.6868],
                    ['markers2', 41.2735,-104.6868],
                    ['markers2', 41.4735,-104.6868],
                    ['markers2', 41.6735,-104.8868],
                    ['markers2', 41.8735,-104.8868],
                    ['markers2', 41.0735,-104.8868],
                    ['markers2', 41.2735,-104.1868],
                    ['markers2', 41.4735,-104.2868],
                    ['markers2', 41.6735,-104.1868],
                    ['markers2', 41.8735,-104.7868],
                    ['markers2', 41.0735,-104.8868],
                    ['markers2', 41.1735,-104.9868],
                    ['markers2', 41.2735,-104.9868],
                    ['markers2', 41.3735,-104.1868],
                    ['markers2', 41.4735,-104.1868],
                    ['markers2', 41.5735,-104.1868],
                    ['markers2', 41.6735,-104.0868],
                    ['markers2', 41.7735,-104.3868],
                    ['markers2', 41.8735,-104.1868],
                    ['markers2', 41.9735,-104.8868],

                                        ['markers1', 40.573436,-105.086547],
                    ['markers2', 41.0735,-105.6000],
                    ['markers2', 41.2735,-105.6022],
                    ['markers2', 41.4935,-105.6044],
                    ['markers2', 41.6735,-105.6066],
                    ['markers2', 41.8735,-105.6088],
                    ['markers2', 41.9935,-105.6468],
                    ['markers2', 41.0735,-105.6868],
                    ['markers2', 41.2735,-105.6868],
                    ['markers2', 41.4735,-105.6868],
                    ['markers2', 41.6735,-105.8868],
                    ['markers2', 41.8735,-105.8868],
                    ['markers2', 41.0735,-105.8868],
                    ['markers2', 41.2735,-105.1868],
                    ['markers2', 41.4735,-105.2868],
                    ['markers2', 41.6735,-105.1868],
                    ['markers2', 41.8735,-105.7868],
                    ['markers2', 41.0735,-105.8868],
                    ['markers2', 41.1735,-105.9868],
                    ['markers2', 41.2735,-105.9868],
                    ['markers2', 41.3735,-105.1868],
                    ['markers2', 41.4735,-105.1868],
                    ['markers2', 41.5735,-105.1868],
                    ['markers2', 41.6735,-105.0868],
                    ['markers2', 41.7735,-105.3868],
                    ['markers2', 41.8735,-105.1868],
                    ['markers2', 41.9735,-105.8868],

                                                            ['markers1', 40.573436,-105.086547],
                    ['markers2', 41.0735,-106.6000],
                    ['markers2', 41.2735,-106.6022],
                    ['markers2', 41.4935,-106.6044],
                    ['markers2', 41.6735,-106.6066],
                    ['markers2', 41.8735,-106.6088],
                    ['markers2', 41.9935,-106.6468],
                    ['markers2', 41.0735,-106.6868],
                    ['markers2', 41.2735,-106.6868],
                    ['markers2', 41.4735,-106.6868],
                    ['markers2', 41.6735,-106.8868],
                    ['markers2', 41.8735,-106.8868],
                    ['markers2', 41.0735,-106.8868],
                    ['markers2', 41.2735,-106.1868],
                    ['markers2', 41.4735,-106.2868],
                    ['markers2', 41.6735,-106.1868],
                    ['markers2', 41.8735,-106.7868],
                    ['markers2', 41.0735,-106.8868],
                    ['markers2', 41.1735,-106.9868],
                    ['markers2', 41.2735,-106.9868],
                    ['markers2', 41.3735,-106.1868],
                    ['markers2', 41.4735,-106.1868],
                    ['markers2', 41.5735,-106.1868],
                    ['markers2', 41.6735,-106.0868],
                    ['markers2', 41.7735,-106.3868],
                    ['markers2', 41.8735,-106.1868],
                    ['markers2', 41.9735,-106.8868],

                                                                                ['markers1', 40.573436,-105.086547],
                    ['markers2', 41.0735,-107.6000],
                    ['markers2', 41.2735,-107.6022],
                    ['markers2', 41.4935,-107.6044],
                    ['markers2', 41.6735,-107.6066],
                    ['markers2', 41.8735,-107.6088],
                    ['markers2', 41.9935,-107.6468],
                    ['markers2', 41.0735,-107.6868],
                    ['markers2', 41.2735,-107.6868],
                    ['markers2', 41.4735,-107.6868],
                    ['markers2', 41.6735,-107.8868],
                    ['markers2', 41.8735,-107.8868],
                    ['markers2', 41.0735,-107.8868],
                    ['markers2', 41.2735,-107.1868],
                    ['markers2', 41.4735,-107.2868],
                    ['markers2', 41.6735,-107.1868],
                    ['markers2', 41.8735,-107.7868],
                    ['markers2', 41.0735,-107.8868],
                    ['markers2', 41.1735,-107.9868],
                    ['markers2', 41.2735,-107.9868],
                    ['markers2', 41.3735,-107.1868],
                    ['markers2', 41.4735,-107.1868],
                    ['markers2', 41.5735,-107.1868],
                    ['markers2', 41.6735,-107.0868],
                    ['markers2', 41.7735,-107.3868],
                    ['markers2', 41.8735,-107.1868],
                    ['markers2', 41.9735,-107.8868],

                                        ['markers2', 41.0735,-107.6000],
                    ['markers2', 41.2735,-108.6022],
                    ['markers2', 41.4935,-108.6044],
                    ['markers2', 41.6735,-108.6066],
                    ['markers2', 41.8735,-108.6088],
                    ['markers2', 41.9935,-108.6468],
                    ['markers2', 41.0735,-108.6868],
                    ['markers2', 41.2735,-108.6868],
                    ['markers2', 41.4735,-108.6868],
                    ['markers2', 41.6735,-108.8868],
                    ['markers2', 41.8735,-108.8868],
                    ['markers2', 41.0735,-108.8868],
                    ['markers2', 41.2735,-108.1868],
                    ['markers2', 41.4735,-108.2868],
                    ['markers2', 41.6735,-108.1868],
                    ['markers2', 41.8735,-108.7868],
                    ['markers2', 41.0735,-108.8868],
                    ['markers2', 41.1735,-108.9868],
                    ['markers2', 41.2735,-108.9868],
                    ['markers2', 41.3735,-108.1868],
                    ['markers2', 41.4735,-108.1868],
                    ['markers2', 41.5735,-108.1868],
                    ['markers2', 41.6735,-108.0868],
                    ['markers2', 41.7735,-108.3868],
                    ['markers2', 41.8735,-108.1868],
                    ['markers2', 41.9735,-108.8868],

                                        ['markers2', 41.2735,-108.6022],
                    ['markers2', 41.4935,-109.6044],
                    ['markers2', 41.6735,-109.6066],
                    ['markers2', 41.8735,-109.6088],
                    ['markers2', 41.9935,-109.6468],
                    ['markers2', 41.0735,-109.6868],
                    ['markers2', 41.2735,-109.6868],
                    ['markers2', 41.4735,-109.6868],
                    ['markers2', 41.6735,-109.8868],
                    ['markers2', 41.8735,-109.8868],
                    ['markers2', 41.0735,-109.8868],
                    ['markers2', 41.2735,-109.1868],
                    ['markers2', 41.4735,-109.2868],
                    ['markers2', 41.6735,-109.1868],
                    ['markers2', 41.8735,-109.7868],
                    ['markers2', 41.0735,-109.8868],
                    ['markers2', 41.1735,-109.9868],
                    ['markers2', 41.2735,-109.9868],
                    ['markers2', 41.3735,-109.1868],
                    ['markers2', 41.4735,-109.1868],
                    ['markers2', 41.5735,-109.1868],
                    ['markers2', 41.6735,-109.0868],
                    ['markers2', 41.7735,-109.3868],
                    ['markers2', 41.8735,-109.1868],
                    ['markers2', 41.9735,-109.8868],

                                        ['markers1', 40.573436,-105.086547],
                    ['markers2', 40.0735,-104.0000],
                    ['markers2', 40.2735,-104.0022],
                    ['markers2', 40.4935,-104.0044],
                    ['markers2', 40.6735,-104.0066],
                    ['markers2', 40.8735,-104.0088],
                    ['markers2', 40.9935,-104.0468],
                    ['markers2', 40.0735,-104.0868],
                    ['markers2', 40.2735,-104.0868],
                    ['markers2', 40.4735,-104.4868],
                    ['markers2', 40.6735,-104.4868],
                    ['markers2', 40.8735,-104.4868],
                    ['markers2', 40.0735,-104.4868],
                    ['markers2', 40.2735,-104.7868],
                    ['markers2', 40.4735,-104.7868],
                    ['markers2', 40.6735,-104.7868],
                    ['markers2', 40.8735,-104.1868],
                    ['markers2', 40.0735,-104.2868],
                    ['markers2', 40.1735,-104.3868],
                    ['markers2', 40.2735,-104.4868],
                    ['markers2', 40.3735,-104.5868],
                    ['markers2', 40.4735,-104.6868],
                    ['markers2', 40.5735,-104.7868],
                    ['markers2', 40.6735,-104.8868],
                    ['markers2', 40.7735,-104.9868],
                    ['markers2', 40.8735,-104.7868],
                    ['markers2', 40.9735,-104.2868],

                    // curve
                    ['markers1', 40.573436,-105.086547],
                    ['markers2', 40.0735,-104.6000],
                    ['markers2', 40.2735,-104.6022],
                    ['markers2', 40.4935,-104.6044],
                    ['markers2', 40.6735,-104.6066],
                    ['markers2', 40.8735,-104.6088],
                    ['markers2', 40.9935,-104.6468],
                    ['markers2', 40.0735,-104.6868],
                    ['markers2', 40.2735,-104.6868],
                    ['markers2', 40.4735,-104.6868],
                    ['markers2', 40.6735,-104.8868],
                    ['markers2', 40.8735,-104.8868],
                    ['markers2', 40.0735,-104.8868],
                    ['markers2', 40.2735,-104.1868],
                    ['markers2', 40.4735,-104.2868],
                    ['markers2', 40.6735,-104.1868],
                    ['markers2', 40.8735,-104.7868],
                    ['markers2', 40.0735,-104.8868],
                    ['markers2', 40.1735,-104.9868],
                    ['markers2', 40.2735,-104.9868],
                    ['markers2', 40.3735,-104.1868],
                    ['markers2', 40.4735,-104.1868],
                    ['markers2', 40.5735,-104.1868],
                    ['markers2', 40.6735,-104.0868],
                    ['markers2', 40.7735,-104.3868],
                    ['markers2', 40.8735,-104.1868],
                    ['markers2', 40.9735,-104.8868],

                                        ['markers1', 40.573436,-105.086547],
                    ['markers2', 40.0735,-105.6000],
                    ['markers2', 40.2735,-105.6022],
                    ['markers2', 40.4935,-105.6044],
                    ['markers2', 40.6735,-105.6066],
                    ['markers2', 40.8735,-105.6088],
                    ['markers2', 40.9935,-105.6468],
                    ['markers2', 40.0735,-105.6868],
                    ['markers2', 40.2735,-105.6868],
                    ['markers2', 40.4735,-105.6868],
                    ['markers2', 40.6735,-105.8868],
                    ['markers2', 40.8735,-105.8868],
                    ['markers2', 40.0735,-105.8868],
                    ['markers2', 40.2735,-105.1868],
                    ['markers2', 40.4735,-105.2868],
                    ['markers2', 40.6735,-105.1868],
                    ['markers2', 40.8735,-105.7868],
                    ['markers2', 40.0735,-105.8868],
                    ['markers2', 40.1735,-105.9868],
                    ['markers2', 40.2735,-105.9868],
                    ['markers2', 40.3735,-105.1868],
                    ['markers2', 40.4735,-105.1868],
                    ['markers2', 40.5735,-105.1868],
                    ['markers2', 40.6735,-105.0868],
                    ['markers2', 40.7735,-105.3868],
                    ['markers2', 40.8735,-105.1868],
                    ['markers2', 40.9735,-105.8868],
                                                            ['markers1', 40.573436,-105.086547],
                    ['markers2', 40.0735,-106.6000],
                    ['markers2', 40.2735,-106.6022],
                    ['markers2', 40.4935,-106.6044],
                    ['markers2', 40.6735,-106.6066],
                    ['markers2', 40.8735,-106.6088],
                    ['markers2', 40.9935,-106.6468],
                    ['markers2', 40.0735,-106.6868],
                    ['markers2', 40.2735,-106.6868],
                    ['markers2', 40.4735,-106.6868],
                    ['markers2', 40.6735,-106.8868],
                    ['markers2', 40.8735,-106.8868],
                    ['markers2', 40.0735,-106.8868],
                    ['markers2', 40.2735,-106.1868],
                    ['markers2', 40.4735,-106.2868],
                    ['markers2', 40.6735,-106.1868],
                    ['markers2', 40.8735,-106.7868],
                    ['markers2', 40.0735,-106.8868],
                    ['markers2', 40.1735,-106.9868],
                    ['markers2', 40.2735,-106.9868],
                    ['markers2', 40.3735,-106.1868],
                    ['markers2', 40.4735,-106.1868],
                    ['markers2', 40.5735,-106.1868],
                    ['markers2', 40.6735,-106.0868],
                    ['markers2', 40.7735,-106.3868],
                    ['markers2', 40.8735,-106.1868],
                    ['markers2', 40.9735,-106.8868],

                                                                                ['markers1', 40.573436,-105.086547],
                    ['markers2', 40.0735,-107.6000],
                    ['markers2', 40.2735,-107.6022],
                    ['markers2', 40.4935,-107.6044],
                    ['markers2', 40.6735,-107.6066],
                    ['markers2', 40.8735,-107.6088],
                    ['markers2', 40.9935,-107.6468],
                    ['markers2', 40.0735,-107.6868],
                    ['markers2', 40.2735,-107.6868],
                    ['markers2', 40.4735,-107.6868],
                    ['markers2', 40.6735,-107.8868],
                    ['markers2', 40.8735,-107.8868],
                    ['markers2', 40.0735,-107.8868],
                    ['markers2', 40.2735,-107.1868],
                    ['markers2', 40.4735,-107.2868],
                    ['markers2', 40.6735,-107.1868],
                    ['markers2', 40.8735,-107.7868],
                    ['markers2', 40.0735,-107.8868],
                    ['markers2', 40.1735,-107.9868],
                    ['markers2', 40.2735,-107.9868],
                    ['markers2', 40.3735,-107.1868],
                    ['markers2', 40.4735,-107.1868],
                    ['markers2', 40.5735,-107.1868],
                    ['markers2', 40.6735,-107.0868],
                    ['markers2', 40.7735,-107.3868],
                    ['markers2', 40.8735,-107.1868],
                    ['markers2', 40.9735,-107.8868],
                                        ['markers2', 41.0735,-107.6000],
                    ['markers2', 40.2735,-108.6022],
                    ['markers2', 40.4935,-108.6044],
                    ['markers2', 40.6735,-108.6066],
                    ['markers2', 40.8735,-108.6088],
                    ['markers2', 40.9935,-108.6468],
                    ['markers2', 40.0735,-108.6868],
                    ['markers2', 40.2735,-108.6868],
                    ['markers2', 40.4735,-108.6868],
                    ['markers2', 40.6735,-108.8868],
                    ['markers2', 40.8735,-108.8868],
                    ['markers2', 40.0735,-108.8868],
                    ['markers2', 40.2735,-108.1868],
                    ['markers2', 40.4735,-108.2868],
                    ['markers2', 40.6735,-108.1868],
                    ['markers2', 40.8735,-108.7868],
                    ['markers2', 40.0735,-108.8868],
                    ['markers2', 40.1735,-108.9868],
                    ['markers2', 40.2735,-108.9868],
                    ['markers2', 40.3735,-108.1868],
                    ['markers2', 40.4735,-108.1868],
                    ['markers2', 40.5735,-108.1868],
                    ['markers2', 40.6735,-108.0868],
                    ['markers2', 40.7735,-108.3868],
                    ['markers2', 40.8735,-108.1868],
                    ['markers2', 40.9735,-108.8868],
                                        ['markers2', 41.2735,-108.6022],
                    ['markers2', 40.4935,-109.6044],
                    ['markers2', 40.6735,-109.6066],
                    ['markers2', 40.8735,-109.6088],
                    ['markers2', 40.9935,-109.6468],
                    ['markers2', 40.0735,-109.6868],
                    ['markers2', 40.2735,-109.6868],
                    ['markers2', 40.4735,-109.6868],
                    ['markers2', 40.6735,-109.8868],
                    ['markers2', 40.8735,-109.8868],
                    ['markers2', 40.0735,-109.8868],
                    ['markers2', 40.2735,-109.1868],
                    ['markers2', 40.4735,-109.2868],
                    ['markers2', 40.6735,-109.1868],
                    ['markers2', 40.8735,-109.7868],
                    ['markers2', 40.0735,-109.8868],
                    ['markers2', 40.1735,-109.9868],
                    ['markers2', 40.2735,-109.9868],
                    ['markers2', 40.3735,-109.1868],
                    ['markers2', 40.4735,-109.1868],
                    ['markers2', 40.5735,-109.1868],
                    ['markers2', 40.6735,-109.0868],
                    ['markers2', 40.7735,-109.3868],
                    ['markers2', 40.8735,-109.1868],
                    ['markers2', 40.9735,-109.8868],


                ];

                // reference for multiple markers; http://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/

                                //pop up info window
                  var contentString = [['<div id="content" >'+
                     '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Data title</h1>'+
                    '<div id="bodyContent">'+
                    '<p><b>Location:</b>' + '' +'</p>' +
                    '<p><b>Time:</b>' + '' +'</p>' +
                    '<p><b>Avg CH4:</b>' + '' +'</p>' +
                    '<p><b>Avg Wind Speed:</b>' + '' +'</p>' +
                    '<p><b>Download:</b> <a href="http://www.cs.colostate.edu/EDF/fleetFeet/fleetFeet.php">'+
                    'bloc1</a> '+
                    '</p>'+
                    '</div>'+
                    '</div>']];
                  // var infowindow = new google.maps.InfoWindow({
                  //    content: contentString
                  // });

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
                    '<p><b>Time:</b>' + '1/20/2015' + '8:00am - 8:30am'+'</p>' +
                    '<p><b>Avg CH4:</b>' + '300' +'</p>' +
                    '<p><b>Avg Wind Speed:</b>' + '400' +'</p>' +
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
                var drawingManager = new google.maps.drawing.DrawingManager({
                drawingMode: google.maps.drawing.OverlayType.MARKER,
                drawingControl: true,
                drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_CENTER,
                drawingModes: [
                // google.maps.drawing.OverlayType.MARKER,
                // google.maps.drawing.OverlayType.CIRCLE,
                google.maps.drawing.OverlayType.POLYGON,
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