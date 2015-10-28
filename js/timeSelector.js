 $("#range").ionRangeSlider({
////////////////////////////date   hours
  
    //                 min: +moment().subtract(12, "hours").format("X"),
    // max: +moment().format("X"),
    // from: +moment().subtract(6, "hours").format("X"),
    // prettify: function (num) {
    //     return moment(num, "X").format("MMM Do, hh:mm A");
    // }
///////////////////////////

//////////////////////////////////date date
    type:"double",
    min: +moment().subtract(1, "years").format("X"),
    max: +moment().format("X"),
    from: +moment().subtract(8, "months").format("X"),
    to:+moment().subtract(5,"months").format("X"),
    prettify: function (num) {
        return moment(num, "X").format("LL");
    }
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

                });
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