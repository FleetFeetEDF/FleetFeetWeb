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
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
       <link rel="shortcut icon" type="image/x-icon" href="img/kiddie.png" />
        <link rel="stylesheet" href="css/general-style.css"/>
        <link rel="stylesheet" href="css/ion.rangeSlider.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/ion.rangeSlider.skinNice.css">
        <link rel="stylesheet" type="text/css" href="css/about.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
            .data{
                height: 6px;
                width: 100%;
                background-color: red;
            }

            .container0{
                margin-top: 0px;
                width: 94.65%;
                height: 300px;
                float: center;
                background-color: black;
            }

            .container1{
                margin-top: 10px;
                width: 100%;
                height: 0px;
                float: left;
                background-color: rgba(0,0,0,1);
            }

            .container2{
                margin-top: 0px;
                width: 100%;
                height: 0px;
                float: right;
                background-color: rgba(0,0,0,1);
            }

            .container3{
                margin-top: 10px;
                width: 100%;
                height: 300px;
                float: right;
                background-color: rgba(0,0,0,1);
            }

            .container3-subcontainer1{
                height: 100%;
                width: 50%;
                float: left;
                background-color: red;
            }

            .container3-subcontainer2{
                height: 100%;
                width: 50%;
                float: right;
                background-color: green;
            }
            .container3-about{
                height: 100%;
                width: 50%;
                float: left;
                background-color: blue;
            }
                .container3-about-title{
                    padding-top: 10%;
                    height:20%;
                    width: 100%;
                    float: top;
                    background-color: black;
                }

                    .container3-about-title #about{
                        padding-top: 10px;
                        margin-left: 40%;
                        height: 60%;
                        width: 80%;
                        font-size: 25px;
                        color: white;
                    }
                .container3-about-image{
                    padding-left:5%; 
                    height: 40%;
                    width: 100%;
                    float: center;
                    background-color: black;
                }

                    .container3-about-image-left{
                        padding-top: 10%;
                        height: 80%;
                        width: 50%;
                        float: left;
                        background-color: black;
                    }

                    .container3-about-image-right{
                        padding-left: 10px;
                        padding-top: 10%;
                        height: 80%;
                        width: 30%;
                        float: left;
                        background-color: black;
                    }

                .container3-about-intro{
                    padding-left:10%;
                    padding-right: 10%; 
                    height: 40%;
                    width: 100%;
                    float: center;
                    background-color: black;
                }

            .container3-documents{
                height: 100%;
                width: 50%;
                float: right;
                background-color: black;
            }
                .container3-documents-title{
                    padding-top: 10%;
                    height: 20%;
                    width: 100%;
                    float: top;
                    background-color: black;
                }
                    .container3-documents-title #documents{
                        padding-top: 10px;
                        margin-left: 40%;
                        height: 60%;
                        width: 80%;
                        font-size: 15px;
                        color: white;
                    }
                .container3-documents-link{
                    width: 100%;
                    height: 80%;
                    background-color: black
                }
                .container3-documents-link a:hover{
                    color: red;
                }

                .container3-documents-link #publication{
                    margin-left: 41%;
                    margin-right: 41%;
                    height: 100%;
                }
                .container3-documents-link #photo{
                    margin-left: 44%;
                    margin-right: 41%;
                    height: 100%;
                }


            .container3-download{
                height: 100%;
                width: 50%;
                float: left;
                background-color: black;

            }
                .container3-download-title{
                    padding-top: 10%;
                    height: 20%;
                    width: 100%;
                    float: top;
                    background-color: black;
                }
                    .container3-download-title #download{
                        padding-top: 10px;
                        margin-left: 40%;
                        height: 60%;
                        width: 80%;
                        font-size: 15px;
                        color: white;
                    }
                .container3-download-link{
                    width: 100%;
                    height: 80%;
                    background-color: black;
                }

                .container3-download-link a:hover{
                    color: red;
                }

                .container3-download-link #sourceCode{
                    margin-left: 44%;
                    margin-right: 41%;
                    height: 100%;
                }

                .container3-download-link #documents_link{
                    margin-left: 40%;
                    margin-right: 41%;
                    height: 100%;
                }
            .container3-extra1{
                height: 100%;
                width: 50%;
                float: right;
                background-color: black;
            }
            .container3-extra1-title{
                    padding-top: 10%;
                    height: 20%;
                    width: 100%;
                    float: top;
                    background-color: black;
            }

            .container3-extra1-title #source{
                        padding-top: 10px;
                        margin-left: 40%;
                        height: 60%;
                        width: 80%;
                        font-size: 15px;
                        color: white;
            }
            .outLinks{
                padding-top: 40px;
                padding-left: 40px;
                float: center;
            }

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
        
        <div class="bloc  l-bloc" id="bloc-1">
            <div class="container bloc-lg">
                <div class="data"></div>   <!--red dividing bar below top navigation -->
                <div class="wrapper people__container">
                    <div class="people__image1">
                    </div>
                    <div class="people__name1">
                    </div>
                    
                    <div class="people__image2">
                    </div>
                    <div class="people__name2"></div>
                    
                     <div class="people__image3">
                    </div>
                    <div class="people__name3"></div>
                    <div class="people__image4">
                    </div>
                    <div class="people__name4"></div>
                    <div class="people__image5">
                    </div>
                    <div class="people__name5"></div>
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
    <!-- Footer - bloc-10 END -->


 </body>
</html>
