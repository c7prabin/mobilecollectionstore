<!DOCTYPE HTML>  
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
<style>
.error {color: red;}
</style>
</head>
<body> 
   
    <nav class="navbar navbar-default ">
        <div class="container-fluid">
          <div class="navbar-header">
              <b><h3 style="padding-left:40px"><i>Mobilestore@.com</i></h3></b> 
              <p style="padding-left:40px; font-size: 12px; padding-bottom: 40px;color:#FF9966">Trade start here</p>
          </div>
            
        </div>
      </nav>
   
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $lnameErr = "Only letters and white space allowed"; 
    }
  }if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
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
    <div class="container" >
        <div class="register" style=" background-image: url(images/1.jpeg)">
        <div class="col-md-7">
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                 <div class="form-group">   
                  <input type="text" name="fname" value="<?php echo $fname;?>" class="form-control" placeholder="first name">
                   <span class="error">* <?php echo $fnameErr;?></span>
                 </div>
                   
                   <div class="form-group">  
                  <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control" placeholder="last name">
                   <span class="error">* <?php echo $lnameErr;?></span>
                 </div>
                   
                   <div class="form-group">
                    <input type="text" name="email" value="<?php echo $email;?>" class="form-control" placeholder="email">
                   <span class="error">* <?php echo $emailErr;?></span>
                   </div>
                   <b> Website:<br> </b><input type="text" style="color:#080808" name="website" value="<?php echo $website;?>">
                   <span class="error"><?php echo $websiteErr;?></span>
                   <br>
                    Comment:<br> <textarea name="comment" rows="3" cols="40" style="color:#080808"><?php echo $comment;?></textarea>
                   <br>
                    Gender:<br>
                   <input type="radio" name="gender"  value="female">Female
                   <input type="radio" name="gender"  value="male">Male
                   <span class="error">* <?php echo $genderErr;?></span>
                   <br> <br>
                   
                   <b>  <button type="submit" class="form-control" style="background-color:skyblue">Register now</button></b>
                  
             </form>
                
                    <p>Signup With: </p>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook-official fa-lg"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
                </ul>
        </div>
         <div class="col-md-5"></div>
            </div>
    </div>
     <footer class="footer1">
<div class="container">

<div class="row"><!-- row -->
            
               <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test Series Schedule</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Bhaktapur Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Baneswor Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Koteshwor Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Tinkune Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cahabil Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Ratnapark Mobilestore</a></li>
                                    <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>
                                    
                                </ul>
                    
                            </li>
                            
                 </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Admission Form</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i>  Computer Live Test</a></li>

                                </ul>
                    
              </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">MobileStore Pvt. Ltd.</h2>
                                <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@mobilestore.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(8AM to 10PM):</b>  +977-9814084309, +977-9814084310  </p>
    
    <p><b>Mobile Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>9824670000, </p>
    <p> +977-1 -6638498, 9824001111</p>
                                </div>
                                
                                <div class="social-icons">
                                
                      <ul class="nomargin">           
                        <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                       <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                       <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                       <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                     </ul>
                   </div>
                 </li>
                </ul>
              </div>
             </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="copyright">

          © 2015,MobileStore, All rights reserved

        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="design">

           <a href="#">MobileStore </a> |  <a target="_blank" href="http://www.webenlance.com">Web Design & Development by Webenlance</a>

        </div>

      </div>

    </div>

  </div>

</div>
</body>
</html>