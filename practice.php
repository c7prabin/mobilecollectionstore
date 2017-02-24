<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/practice.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <div class="logo">
            <a href="#"><img class="img-responsive" src="images/18.jpg" title="logo" /></a>    
        </div>
    </div>
       <form class="navbar-form navbar-left">
           <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search facebook">
                <div class="input-group-btn">
                 <button class="btn btn-default input-sm" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
          </div>
        </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Navbar Forms</h3>
  <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
</div>

</body>
</html>
