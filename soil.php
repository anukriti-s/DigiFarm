<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Digi Farm</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgb(0,0,255);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
    <!--END HEAD SECTION -->
<body>
     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Digitizing Farms</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html#header-section">HOME</a></li>
                    <li><a href="index.html#services-section">SERVICES</a></li>
                    <li><a href="soil.html">KNOW YOUR SOIL</a></li>
                    <li><a href="index.html#price-section">PURCHASE</a></li>
                    <li><a href="index.html#about-section">OUR TEAM</a></li>
                    <li><a href="index.html#products-section">HELP</a></li>
                    <li><a href="index.html#contact-section">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row main-low-margin text-center">
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-8 col-sm-8" data-scrollreveal="enter right and move 100px, wait 0.8s">
            <div id="demo-request">
                <a class="option-toggle"><i class="icon-question-circle" ></i></a>
                <div class="panel panel-sea">
                    <div class="panel-body">
                      <p>Enter the farm location:<input type="text" id="address1"/>
<input type="submit" value="OK" onclick="myFunction()"></p>
<p id="demo"></p>
<p id="url_1"> </p>
<p id="st"></p>
<p id="soilType"></p>
<script>
var addr;
function myFunction() {
addr = document.getElementById("address1");
document.getElementById("st").innerHTML = "The soil type is:"
var gjson ;
gjson = getJSON(url1) ;
var obj = JSON.parse(gjson);
var strng=obj.properties.TAXNWRBMajor;
strng = strng.substring(strng.indexOf(" ") + 1);
document.getElementById("soilType").innerHTML = strng;
//document.getElementById("soilType").innerHTML = url1;

}
//var addr="Bangalore"
var url1="<?php
function getCoordinates($address){
$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
$url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyDRHT7-HdIt3_Ek58Jivj3AMBFBdeosGuY";
$response = file_get_contents($url);
$json = json_decode($response,true); //generate array object from the response from the web
return ("https://rest.soilgrids.org/query?lon=".$json['results'][0]['geometry']['location']['lng']."&lat=".$json['results'][0]['geometry']['location']['lat']."&attributes=TAXNWRB");
}

echo getCoordinates('"+addr+"');
?>"
function getJSON(url) {
    var resp ;
    var xmlHttp ;

    resp  = '' ;
    xmlHttp = new XMLHttpRequest();

    if(xmlHttp != null)
    {
        xmlHttp.open( "GET", url, false );
        xmlHttp.send( null );
        resp = xmlHttp.responseText;
    }

    return resp ;
}
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT SECTION -->
    <div id="contact-section">
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter top and move 100px, wait 0.5s">
                    <h1>Contact Us</h1>
                    <h4>
                       Feel free to reach us in case you need to.
                    </h4>
                </div>
            </div>
            <!-- ./ Main Heading-->
            <div class="row">
                <div class="col-md-12  col-sm-12 ">
                    <div class="col-md-6  col-sm-12" data-scrollreveal="enter left and move 100px, wait 0.8s">
                        <h3><i class="fa fa-tint"></i> Reach Us Here</h3>
                        <hr />
                        <button class="btn btn-primary"><a href="googlemap.html" style="color: white;"> View our location on map </a></button>
                        <p>
                          <br>
                        Cupboard Under the Stairs,<br />
                        Bellandur,<br />
                            Bangalore, India<br />
                        Call: +91-9820890309<br />
                        Email: service@digifarm.com<br />
                            </p>
                        <h3> Social Presence</h3>
                        <a href="https://www.facebook.com/DigiFarm-607698119610444/"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>
                    </div>
                    <div class="col-md-6  col-sm-12" data-scrollreveal="enter right and move 100px, wait 0.8s">
                        <h3>Need Help ? Write to us. </h3>
                        <hr />
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8"  placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
             <!-- ./ Row Content-->
        </div>
    </div>
    <!--END CONTACT SECTION -->


    <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy; 2014 www.yourdomain.com | All Right Reserved

            </div>

        </div>

    </div>
    <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
     <!-- SCROLL REVEL LIBRARY FOR SCROLLING ANIMATIONS-->
    <script src="assets/js/scrollReveal.js"></script>
       <!-- CUSTOM SCRIPT-->
    <script src="assets/js/custom.js"></script>
</body>
</html>
