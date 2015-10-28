<?php 
    // $servername = "faure.cs.colostate.edu";
    // $username = "MethaneAnalysis";
    // $password = "MethProj!5";

    // $connection = new mysqli($servername, $username, $password);

    // //check connection
    // if (mysqli_connect_error())
    // {
    //     die("Connection failed: ");
    // }

    // echo "faure Connected successfully";
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="keywords" content="EDF, edf, Methane, leak, leaks, methane leak, climate change, big data">
        <meta name="description" content="Natural gas heats our homes and cooks our dinner. But when natural gas—mostly methane—leaks into the air, it's a big problem for the climate. So EDF and Google Earth Outreach teamed up to build a faster, cheaper way to find and assess leaks under our streets and sidewalks. We tested it as part of a pilot mapping program, and here's what we found.">
        <meta name="author" content="Big Data group, CS Dept., CSU">
        <!-- <meta http-equiv="refresh" content="3"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- <meta http-equiv="refresh" content="3"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title>fleetFeet | BDG</title>
                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
       <link rel="shortcut icon" type="image/x-icon" href="img/kiddie.png" />
        <link rel="stylesheet" href="css/general-style.css"/>
        <link rel="stylesheet" href="css/ion.rangeSlider.css">
        <link rel="stylesheet" type="text/css" href="css/fleetFeet.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/ion.rangeSlider.skinNice.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <script type="text/javascript" src="slick/slick.min.js">
        </script>

        <script src="js/moment.js"></script>
        <style>


        </style>
    </head>
<body>       
   
  <div class="page-container">
        
        <!-- Navigation Bloc -->
        <div id="nav-bloc" class="bloc bgc-1 d-bloc animated">

            <div class="container">
               
                <nav class="navbar">
                    
                    <div class="navbar-header">
                        
                        <a class="navbar-brand"  href="/">fleetFeet</a>
                        <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-1">
                    
                        <ul class="site-navigation nav">
                            <li>
                                <a href="fleetFeet.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="documents.php">Documents</a>
                            </li>
                            <li>
                                <a href="download.php">Download</a>
                            </li>
                            <li>
                                <a href="people.php">People</a>
                            </li>
                        </ul>
                    
                    </div>
                
                </nav>
            
            </div>
        </div>


        <!-- Navigation Bloc END -->

        <!-- BODY -->
        <div class="fleetWrapper">
            <div class="fleetFeetContainer">
                <div class="data">

                </div>
                <hr class="featurette-divider">
                
                <div id="map">
                    <!-- Map -->
                </div>
                <div class="charts">
                    

                </div>

                <div class="timeLine">
                    
                    <input type="text" id="range" name="range" value="">
    
                </div>
                <div class="container0">
                
                </div>
            </div>

        </div>
        <!-- BODY END -->

            <div class="container1">
                
            </div>

            <div class="container2">

            </div>

            <div class="container3">

                <div class="container3-subcontainer1">


                    <div class="container3-about">

                        <div class="container3-about-title">
                            <span id="about"><strong>About</strong></span>

                        </div>
                        <div class="container3-about-image">
                            <div class="container3-about-image-left">
                                <img src="https://s3.amazonaws.com/emma-assets/88e4/eb4823d23a7c6965af2708fcfb90f039/Google-Earth-Outreach275x96.png" alt="google out reach" width="150px">
                            </div>
                            <div class="container3-about-image-right">
                                <img src="https://www.edf.org/cdn/farfuture/Q072T_Hxa2v26JFGnENVn5CQmhKN2lJVxuyvpT_HWus/mtime:1376318730/sites/all/themes/edf/images/footLogo.gif" alt="edf" width="130px">
                            </div>
                        </div>
                        <div class="container3-about-intro">
<span id="intro">Natural gas: Local leaks impact global climate EDF and Google Earth Outreach use new approach to pinpoint climate pollution</span>
                        </div>

                    </div>

                    <div class="container3-documents">
                        <div class="container3-documents-title">
                            <span id="documents"><strong>Documents</strong></span>
                        </div>
                        <div class="container3-documents-link">
                            <br/><br/>
                            <span id="publication"><a href="">Publication</a></span><br/><br/>
                            <span id="photo"><a href="">Photo</a></span>

                        </div>
                    </div>

                </div>
                
                <div class="container3-subcontainer2">

                    <div class="container3-download">
                        <div class="container3-download-title">
                            <span id="download"><strong>Download</strong></span>
                        </div>

                        <div class="container3-download-link">
                            <br/><br/>
                            <span id="sourceCode"><a href="">Code</a></span><br/><br/>
                            <span id="documents_link"><a href="">Documents</a></span>

                        </div>

                    </div>




                    <div class="container3-extra1">
                        <div class="container3-extra1-title">
                            <span id="source"><strong>Source</strong></span>
                        </div>
                        <div class="outLinks">
                            <img src="img/GitHub-Mark-Light-64px.png" alt="GitHub-Mark-Light-64px.png" width="60px">
                        </div>
                        <div class="others"></div>
                    </div>

                </div>

            </div>
    </div>

    <!-- Footer - bloc-10 -->
    <div class="bloc  d-bloc" id="bloc-10">
        <div class="container bloc-sm">
            <div class="bloc-footer">

            <section class="footer-bottom-section">
                <div class="footer-legal">
                    <span class="footer-copyright">Copyright © 2015 Big Data Group. All rights reserved</span>
                    <span><span> | </span><a href="http://www.cs.colostate.edu/~sangmi/dokuwiki/doku.php"><strong>Bid Data Group</strong></a></span><span> |  </span><span><a href="#"><strong>Privacy</strong></a></span>
                </div>
            </section>

            </div>
        </div>
    </div>


        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=drawing"></script>
        <script>
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



        </script>

        <script src="js/ion.rangeSlider.min.js"></script>

        <script>
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
        </script>
            <!-- Footer - bloc-10 END -->
        <script type="text/javascript" src="js/base.js"></script>
</body>
</html>
