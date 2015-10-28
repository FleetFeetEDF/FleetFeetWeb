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

   document.getElementById("date").innerHTML = "<strong>Time selected:</strong>  "+ moment(value[0], "X").format("MMMM Do YYYY, h:mm:ss a")+ " --- " + moment(value[1], "X").format("MMMM Do YYYY, h:mm:ss a");
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