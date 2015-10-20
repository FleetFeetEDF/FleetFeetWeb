<!DOCTYPE html>
<html>
<head>
    <title>CSU Sensor Project</title>

    <link rel="stylesheet" href="style.css" type="text/css">
    <!--todo download these and put them in a lib directory -->

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css"/>
    <script type="text/javascript" src="http://mbostock.github.com/d3/d3.js?1.29.1"></script>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADkfYkgsgS-7n9H8KTKp2onU-1f_uEqXg">
    </script>
    <script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
    <script src="data.js"></script>

</head>

<body>

<div id="page">
    <div id="header">
        <h1>Sensor Project</h1>
    </div>
    <div id="filePanel">
        <p>Files:</p>
        <div id="files">
            <!-- <p><a>file 1</a></p>
            <p><a>file 0</a></p>
            <p><a>file 3</a></p> -->
            <?php

            if ($handle = opendir('./files')) {

                $file = fopen("markers.csv","w");
            fwrite($file, "id,lat,lon,val,time\n");

                while (false !== ($entry = readdir($handle))) {

                    if ($entry != "." && $entry != "..") {

                        print ("<p><a href=./display.php?file=" . $entry . ">" . $entry . "</a></p>");

                            $filename = $entry;
                            $myArray = explode('_', $entry);
                            $test = $myArray[2];
                            $test2 = $myArray[3];
                            $time = $myArray[1];
                            $methvalue = $myArray[4];
                            $myArray2 = explode('.', $methvalue);
                            $methvaluereal = $myArray2[0];

                            $result = $filename;
                            $result .= ",";
                            $result .= $test;
                            $result .= ",";
                            $result .= $test2;
                            $result .= ",";
                            $result .= $methvaluereal;
                            $result .= ",";
                            $result .= $time;

            //$list = array($filename,$test,$test2,$time,);
            $list = array($result,);

            foreach ($list as $line)
              {
              fputcsv($file,explode(',',$line));
              }
                    }
                }

                closedir($handle);
            }

            ?>



        </div>

            <div id="control">
                <label>Show markers for </label><label id="min" name="min">07</label> minutes:
                <form>
                    <input id="slider" type="range" name="slider" min="0" max="5" value="0" step="1"/>
                </form>
                <script src="slider.js"></script>
            </div>
    </div>

    <div id="mapPanel">
        <div id="map"></div>
        <script src="map.js"></script>
    </div>

</div>
</body>

</html> 