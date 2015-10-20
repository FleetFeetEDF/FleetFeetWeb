<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display file</title>
</head>

<body style="background-color:lightgrey">

  <h1 style="font-family:courier">Sensor Project</h1>

  <p>Sensor data</p>



<?php


if ($handle = opendir('./files')) {

    $filename =  $_GET['file'];
    //$file = file_get_contents("./files/$filename", FILE_USE_INCLUDE_PATH);
    echo "file: $filename ";

    echo "<html><body><table>\n\n";
    $f = fopen("./files/$filename", "r");
    while (($line = fgetcsv($f)) !== false) {
        $row = $line[0];    // We need to get the actual row (it is the first element in a 1-element array)
        $cells = explode(";",$row);
        echo "<tr>";
        foreach ($line as $cell) {
            echo "<td><td>" . htmlspecialchars($cell) . "<td></td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";


    closedir($handle);

}



?>

<head>
  <!--<a href="./files" target="_blank">see files</a>-->
  <style>
   a:link    {color:#000000; background-color:transparent; text-decoration:italic}
   a:visited {color:#000000; background-color:transparent; text-decoration:none}
   a:hover   {color:#ff0000; background-color:transparent; text-decoration:underline}
   a:active  {color:#ff0000; background-color:transparent; text-decoration:underline}
</style> 

</head>

</body>

</html> 