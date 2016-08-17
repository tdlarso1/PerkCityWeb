
<?  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/stylesheets/styles.css">
  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
    
    .perks {
    	color:red;
    	font-family: 'Merriweather', serif;
    	font-size: 30px;
    	font-weight: bold; 
    	letter-spacing: -1px; 
    	line-height: 1; 
    	text-align: center;
    
    }
    
    .btn{
    	color:black;
    	background-color: white;
    	border:0px solid transparent;
    	
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
  <img src="qualtrics logo.gif" class="img-responsive" style="width:100%" alt="Image">
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="loggin.php?logout=1"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<div id="services" class="container-fluid text-center">
  <h2 class="perks">Welcome to the PERKSPERIENCE</h2>
  
 <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <button type="button" class="btn">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>FOOD</h4>
      <p>Discounts near you</p>
      </button>
    </div>
    <div class="col-sm-4">
    <button type="button" class="btn">
      <span class="glyphicon glyphicon-thumbs-up logo-small"></span>
      <h4>FUN</h4>
      <p>Are you adventurous?</p>
      </button>
    </div>
    <div class="col-sm-4">
    <button type="button" class="btn">
      <span class="glyphicon glyphicon-scale logo-small"></span>
      <h4>HEALTH/FITNESS</h4>
      <p>Do you even lift bro?</p>
      </button>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <button type="button" class="btn">
      <span class="glyphicon glyphicon-plane logo-small"></span>
      <h4>TRAVEL</h4>
      <p>Hotels, rental cars ect.</p>
      </button>
    </div>
    <div class="col-sm-4">
    <button type="button" class="btn">
      <span class="glyphicon glyphicon-headphones logo-small"></span>
      <h4>ELECTRONICS</h4>
      <p>Plug in</p>
      </button>
    </div>
    <div class="col-sm-4">
    <button type="button" class="btn">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>SERVICES</h4>
      <p>Dental, car, and others</p>
      </button>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>


