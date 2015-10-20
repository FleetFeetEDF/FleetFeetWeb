d3.select("#slider").on('change', function(d) {

    var current = years[parseInt(this.value)],
        year = current.substring(0, 4),
        month = current.substring(5);
    d3.select("#month").text(""+month);
    d3.select("#year").text(""+year);
    var new_data = matrices[current];
    removeAllMarkers();
    drawMarkers(new_data);
});