var $rangeTime = $("#rangeTime");

$rangeTime.ionRangeSlider({
////////////////////////////date   hours
    type:"double",
    min: +moment().subtract(30, "days").format("X"),
    max: +moment().format("X"),
    from: +moment().subtract(-7, "days").format("X"),
    to:+moment().subtract(0, "hours").format("X"),
    prettify: function (num) {
        return moment(num, "X").format("MMMM Do YYYY, h:mm:ss a");
        // return moment(num, "X").format(" hh:mm A");
    }
 });

$rangeTime.on("change", function () {
    var $this = $(this),
        value = $this.prop("value").split(";");

        //update the map

        //empty the markers
        for( i = 0; i < markerArray.length; i++ ) {
            markerArray[i].setMap(null);
        }
        markerArray=[];
        var freqData=[];

        var infoWindow = new google.maps.InfoWindow(), marker, i;

        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
               bounds.extend(position);
               if( (markers[i][3]>=value[0]) && (markers[i][4]<=value[1])){
                freqData.push({State:'m'+i,freq:{low:markers[i][5], mid:markers[i][6], high:markers[i][7]}});
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
                       // console.log("-------------hahah");
               }else{
                       // marker = new google.maps.Marker({
                       //     position: position,
                       //     map: null,
                       //     title: markers[i][0]
                       //   });

               }
        }



        google.maps.event.trigger(map, 'resize');
            
        if(document.getElementById("dashboard")!=null)
            document.getElementById("dashboard").remove();

        document.getElementById("dashboard0").insertAdjacentHTML('afterend','<div id="dashboard"></div>');
        //update the bar chart

        // var freqData=[
        // {State:'AL',freq:{low:4786, mid:1319, high:249}}
        // ,{State:'AZ',freq:{low:1101, mid:412, high:674}}
        // ,{State:'CT',freq:{low:932, mid:2149, high:418}}
        // ,{State:'DE',freq:{low:832, mid:1152, high:1862}}
        // ,{State:'FL',freq:{low:4481, mid:3304, high:948}}
        // ,{State:'GA',freq:{low:1619, mid:167, high:1063}}
        // ,{State:'IA',freq:{low:1819, mid:247, high:1203}}
        // ,{State:'IL',freq:{low:4498, mid:3852, high:942}}
        // ,{State:'IN',freq:{low:797, mid:1849, high:1534}}
        // ,{State:'KS',freq:{low:162, mid:379, high:471}}
        // ];

        dashboard('#dashboard',freqData);




   document.getElementById("date").innerHTML = "<strong>Time selected:</strong>  "+ moment(value[0], "X").format("MMMM Do YYYY, h:mm:ss a")+" ("+value[0]+") " +" --- " + moment(value[1], "X").format("MMMM Do YYYY, h:mm:ss a")+" ("+value[1]+") ";
    console.log(moment(value[0], "X").format("MMMM Do YYYY, h:mm:ss a") + " ---- " + moment(value[1], "X").format("MMMM Do YYYY, h:mm:ss a"));
});




///////////////////////////

//////////////////////////////////date date
    // type:"double",
    // min: +moment().subtract(1, "years").format("X"),
    // max: +moment().format("X"),
    // from: +moment().subtract(8, "months").format("X"),
    // to:+moment().subtract(5,"months").format("X"),
    // prettify: function (num) {
    //     return moment(num, "X").format("LL");
    // }
////////////////////////////////////////////////////////


//////////////////range
                    //     input:"#range",
                    //     type: "double",
                    //     min: 0,
                    //     max: 100,
                    //     from: 50,
                    //     to:60,
                    //     keyboard: true,

                    //     onStart: function (data) {
                    //         console.log("onStart");
                    //     },
                    //     onChange: function (data) {
                    //         console.log("onChange");
                    //     },
                    //     onFinish: function (data) {
                    //         console.log("onFinish");
                    //     },
                    //     onUpdate: function (data) {
                    //         console.log("onUpdate");
                    // }
////////////////////////////range


// dumped code for future reference




                // $(function () {

                //     $("#range").ionRangeSlider({
                //         hide_min_max: true,
                //         keyboard: true,
                //         min: 0,
                //         max: 31,
                //         from: 15,
                //         type: 'single',
                //         step: 1,
                //         prefix: "",
                //         grid: true,
                //         onStart: function (data) {
                //             console.log("onStart");
                //         },
                //         onChange: function (data) {
                //             console.log("onChange");
                //         },
                //         onFinish: function (data) {
                //             console.log("onFinish");
                //         },
                //         onUpdate: function (data) {
                //             console.log("onUpdate");
                //     });

                // });




 // time selector

// $rangeDate.ionRangeSlider({
// ////////////////////////////date   hours
  
//     // min: +moment().subtract(12, "hours").format("X"),
//     // max: +moment().format("X"),
//     // from: +moment().subtract(6, "hours").format("X"),
//     // prettify: function (num) {
//     //     return moment(num, "X").format("MMM Do, hh:mm A");
//     // }
// ///////////////////////////

// //////////////////////////////////date date
//     type:"double",
//     min: +moment().subtract(1, "years").format("X"),
//     max: +moment().format("X"),
//     from: +moment().subtract(8, "months").format("X"),
//     to:+moment().subtract(5,"months").format("X"),
//     prettify: function (num) {
//         return moment(num, "X").format("LL");
//     }

// ////////////////////////////////////////////////////////


// //////////////////range
//                     //     input:"#range",
//                     //     type: "double",
//                     //     min: 0,
//                     //     max: 100,
//                     //     from: 50,
//                     //     to:60,
//                     //     keyboard: true,

//                     //     onStart: function (data) {
//                     //         console.log("onStart");
//                     //     },
//                     //     onChange: function (data) {
//                     //         console.log("onChange");
//                     //     },
//                     //     onFinish: function (data) {
//                     //         console.log("onFinish");
//                     //     },
//                     //     onUpdate: function (data) {
//                     //         console.log("onUpdate");
//                     // }
// ////////////////////////////range

//                 });

  // $("#rangeTime").ionRangeSlider({
  //   onStart: function (data) {
  //       console.log(data);
  //   },
  //   onChange: function (data) {
  //       console.log(data);
  //   },
  //   onFinish: function (data) {
  //       console.log(data);
  //   },
  //   onUpdate: function (data) {
  //       console.log(data);
  //   }

// rangeDate.onStart(function (data) {
//         console.log(data);
//     });