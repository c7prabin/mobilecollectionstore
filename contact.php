<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
       #map-container { height: 350px;width:420px;}
      </style>
</head>
  <body>
      <div class="container">
                <nav class="navbar ">
                      <div class="navbar-header">
                          <div class="col-sm-4">
                            </div>
                         <div class="col-sm-4">
                         </div>
                           <div class="col-sm-4">
                             <div class="search">
                               <a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
                             </div>
                           </div>
                     </div>
                    <div class="header-top-nav">
                      <div class="col-md-8 col-md-offset-4">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="register"><a href="register.php"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
                            <li class="login"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li class="delivery"><a href="#"><span class="glyphicon glyphicon-send"></span> Delivery</a></li>
                            <li class="Checkout"><a href="#"><span class="glyphicon glyphicon-check"></span> Checkout</a></li>
                            <li class="my account"><a href="#"><span class="glyphicon glyphicon-user"></span> My account</a></li>
                            <li class="hopingcart"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>shopingcart </a> </li>

                        </ul>
                      </div>
                    </div>
                </nav>
      </div>
      <nav class="navbar navbar-default " >
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#"><img src="images/logo.png" title="logo" /></a>
          </div>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php"> HOME</a></li>
                <li><a href="about.php"> ABOUT</a></li>
                <li><a href="store.php"> STORE</a></li>
                <li><a href="#"> FEATURE</a></li>
                <li><a href="blog.php"> BLOG</a></li>
                <li><a href="#"> CONTACT</a></li>
             </ul>
        </div>
      </nav>
      <div class="container">
         <div class="col-md-5">
          <h3>Find us here</h3>
          <div class="panel panel-default">
            <div class="panel-body">
           <div id="map-container" class="col-md-6"></div>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
             <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
              <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
     <script> 
 
             function init_map() {
               var var_location = new google.maps.LatLng(45.430817,12.331516);
 
              var var_mapoptions =
               {
               center: var_location,
                zoom: 14
               };
 
              var var_marker = new google.maps.Marker({
                position: var_location,
                 map: var_map,
                  title:"Venice"});
 
              var var_map = new google.maps.Map(document.getElementById("map-container"),
                 var_mapoptions);
 
                var_marker.setMap(var_map);  
 
                 }
 
                google.maps.event.addDomListener(window, 'load', init_map);
 
      </script>
    </div>
  </div>
       <h2>Company Information :</h2>

       <p> 500 Lorem Ipsum Dolor Sit,</p>

        <p> 22-56-2-9 Sit Amet, Lorem,</p>

        <p> USA</p>

        <p>Phone:(00) 222 666 444</p>

       <p> Fax: (000) 000 00 00 0</p>
        <p>Email:<u> info@mycompany.com</u></p>
 
     <p>  Follow on: <u>Facebook</u>,<u> Twitter</u></p>
         </div>
         <div class="col-md-7">
         <form>
          <h3> Contact us</h3>
          <div class="form-group">
                <label for="exampleInputEmail1">First name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
          <div class="form-group">
                <label for="exampleInputEmail1">Last name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
             </div>
             <div class="form-group">
                <label for="exampleTextarea">Textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
             </div>
             <div class="form-group">
               <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
               <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
             </div>
           <fieldset class="form-group">
                <legend>Radio buttons</legend>
              <div class="form-check">
                 <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                 </label>
              </div>
           <div class="form-check">
                 <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                </label>
           </div>
           <div class="form-check disabled">
                 <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                   Option three is disabled
                 </label>
           </div>
          </fieldset>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
               Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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
