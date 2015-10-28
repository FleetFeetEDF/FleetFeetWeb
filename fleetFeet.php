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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>


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

<!--                 <div class="timeLine">
                    
                    <input type="text" id="range" name="range" value="">
    
                </div> -->
                                <div class="status">
                    <p id="date"></p>
                </div>
                <div class="timeLine">
                    
                    <input type="text" id="rangeTime" name="range" value="">
    
                </div>

                <div class="container0">
                    <div id="dashboard0"></div>
                <div id='dashboard'>
                </div>
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


        <!-- Scripts  -->
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script type="text/javascript" src="js/barchart.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=drawing"></script>
        <script src="js/map.js"></script>
        <script src="js/ion.rangeSlider.min.js"></script>
        <script src="js/timeSelector.js"></script>
            <!-- Footer - bloc-10 END -->
        <script type="text/javascript" src="js/base.js"></script>

        <script type="text/javascript">

        </script>
</body>
</html>
