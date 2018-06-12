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
    <title>LOCAME Multipurpose Template</title>
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

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="index.html#services-section">SERVICES</a></li>
                    <li><a href="index.html#price-section">PURCHASE</a></li>
                    <li><a href="index.html#price-section">ABOUT</a></li>
                    <li><a href="index.html#products-section">HELP</a></li>
                    <li><a href="index.html#contact-section">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
    <div class="container" >
        <div class="row main-top-margin text-center">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter top and move 100px, wait 0.5s">
                <h1>Our Equipments</h1>
                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                </h4>
            </div>
        </div>
    </div>
    <div class="row main-top-margin text-center">
        <div class="col-md-6  col-sm-12" data-scrollreveal="enter left and move 100px, wait 0.8s">
            <div class="col-md-4 col-sm-4" data-scrollreveal="enter right and move 100px, wait 0.8s">
                <i class="fa fa-shopping-cart fa-5x color-red"></i>
                <h4>PRICE INFO</h4>
                <ul>
                    <div>
                        <strong>
                        <span class="price-amount">Rs. 18</span>
                        </strong>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                <i class="fa fa-shopping-cart fa-5x color-red"></i>
                <h4>PRICE INFO</h4>
                <ul>
                    <div>
                        <strong>
                        <span class="price-amount">Rs. 18</span>
                        </strong>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                <i class="fa fa-shopping-cart fa-5x color-red"></i>
                <h4>PRICE INFO</h4>
                <ul>
                    <div>
                        <strong>
                        <span class="price-amount">Rs. 18</span>
                        </strong>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                <i class="fa fa-shopping-cart fa-5x color-red"></i>
                <h4>PRICE INFO</h4>
                <ul>
                    <div>
                        <strong>
                        <span class="price-amount">Rs. 18</span>
                        </strong>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                <i class="fa fa-shopping-cart fa-5x color-red"></i>
                <h4>PRICE INFO</h4>
                <ul>
                    <div>
                        <strong>
                        <span class="price-amount">Rs. 18</span>
                        </strong>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </ul>
            </div>
        </div>
        <div class="col-md-6  col-sm-12" data-scrollreveal="enter left and move 100px, wait 0.8s">
            <div id="demo-request">
                <a class="option-toggle"><i class="icon-question-circle" ></i></a>
                <div class="panel panel-sea">
                    <div class="panel-body">
                        <form id="demoRequest" action="equipmentsform.php" method="post">
                            <div class="form-body">
                                <div class="form-group ">
                                    <label for="name" class="sr-only">Name</label>
                                    <input id="nameInput" class="form-control" placeholder="Name" type="text" name="name" required>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="sr-only">Email</label>
                                    <input id="emailInput" class="form-control" placeholder="Email" type="email" name="email" required>
                                </div>
                                <div class="form-group ">
                                    <label for="company" class="sr-only">Company</label>
                                    <input id="companyInput" class="form-control" placeholder="Company" type="text" name="company" required>
                                </div>
                                <div class="form-group ">
                                    <label for="phone" class="sr-only">Phone</label>
                                    <input id="phoneInput" class="form-control" placeholder="Contact Number with Country Code" type="text" name="phone">
                                </div>
                                <div class="form-group ">
                                    <label for="experience" class="sr-only">Experience</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="experienceInput" class="form-control" placeholder="Equipmemt1" type="text" nameEquip1="phone" disabled="">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fertilizersInput" class="form-control" placeholder="Quantity in grams" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="experience" class="sr-only">Experience</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="experienceInput" class="form-control" placeholder="Equipmemt1" type="text" nameEquip1="phone" disabled="">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fertilizersInput" class="form-control" placeholder="Quantity in grams" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="experience" class="sr-only">Experience</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="experienceInput" class="form-control" placeholder="Equipmemt1" type="text" nameEquip1="phone" disabled="">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fertilizersInput" class="form-control" placeholder="Quantity in grams" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="experience" class="sr-only">Experience</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="experienceInput" class="form-control" placeholder="Equipmemt1" type="text" nameEquip1="phone" disabled="">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fertilizersInput" class="form-control" placeholder="Quantity in grams" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="experience" class="sr-only">Experience</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="experienceInput" class="form-control" placeholder="Equipmemt1" type="text" nameEquip1="phone" disabled="">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="fertilizersInput" class="form-control" placeholder="Quantity in grams" type="text" name="phone">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" id="demoBtn" class="btn btn-primary btn-lg btn-left main-mid-margin" style="margin-top: 15px;" value="Submit" />
                        </form>
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
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       
                    </h4>
                </div>
            </div>
            <!-- ./ Main Heading-->
            <div class="row">
                <div class="col-md-12  col-sm-12 ">
                    <div class="col-md-6  col-sm-12" data-scrollreveal="enter left and move 100px, wait 0.8s">
                        <h3><i class="fa fa-tint"></i> Reach Us Here</h3>
                        <hr />
                        <p>
                        103, New Street,<br />
                            New York, USA.<br />                          
                        Call: +23-00-89-009<br />
                        Email: demo@yourdomain.com<br />
                            </p>
                        <h3> Social Presence</h3>
                        <a href="#"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>
                    </div>
                    <div class="col-md-6  col-sm-12" data-scrollreveal="enter right and move 100px, wait 0.8s">
                        <h3>Need Help ? Write Us. </h3>
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

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
