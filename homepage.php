<!DOCTYPE html>
<html lang="en">
<head>
<!-- Theme Made By www.w3schools.com - No Copyright -->
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body {
font: 400 15px Lato, sans-serif;
line-height: 1.8;
color: #818181;
}
h2 {
font-size: 24px;
text-transform: uppercase;
color: #303030;
font-weight: 600;
margin-bottom: 30px;
}
h4 {
font-size: 19px;
line-height: 1.375em;
color: #303030;
font-weight: 400;
margin-bottom: 30px;
} 

.jumbotron {
background-image:url("pcnew.jpg");
background-attachment: fixed;
padding: 224px 75px;
text-shadow: -1px 0 #85dbd8, 0 1px #85dbd8, 1px 0 #85dbd8, 0 -1px #85dbd8;
font-family: “Helvetica Neue”, Helvetica, Arial, sans-serif;
line-height:20px;


}
.jumbotron h3 {
color:white;
font-size:47px;
line-height:20px;

}

.jumbotron h4 {
color:white;
font-size:26px;


}

.jumbotron h5 {
font-size:30px;
color:white;

}

.btn-success, .btn-success:hover, .btn-success:active, .btn-success:visited {
    background-color: #f6e789; !important;
    border-color:grey;
    color: grey;
    
} 
.container-fluid {
padding: 60px 50px;
}
.bg-grey {
background-color: #f6f6f6;
}
.logo-small {
color: #e10019;
font-size: 50px;
}
.logo {
color: #f4511e;
font-size: 200px;
}
.thumbnail {
padding: 0 0 15px 0;
border: none;
border-radius: 0;
}
.thumbnail img {
width: 100%;
height: 100%;
margin-bottom: 10px;
}
.carousel-control.right, .carousel-control.left {
background-image: none;
color: #e10019;
}
.carousel-indicators li {
border-color: #e10019;
}
.carousel-indicators li.active {
background-color: #e10019;
}
.item h4 {
font-size: 19px;
line-height: 1.375em;
font-weight: 400;
font-style: italic;
margin: 70px 0;
}
.item span {
font-style: normal;
}
.panel {
border: 1px solid #e10019; 
border-radius:0 !important;
transition: box-shadow 0.5s;
}
.panel:hover {
box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}
.panel-footer .btn:hover {
border: 1px solid #e10019;
background-color: #fff !important;
color: #f4511e;
}
.panel-heading {
color: #fff !important;
background-color: #e10019 !important;
padding: 25px;
border-bottom: 1px solid transparent;
border-top-left-radius: 0px;
border-top-right-radius: 0px;
border-bottom-left-radius: 0px;
border-bottom-right-radius: 0px;
}
.panel-footer {
background-color: white !important;
}
.panel-footer h3 {
font-size: 32px;
}
.panel-footer h4 {
color: #aaa;
font-size: 14px;
}
.panel-footer .btn {
margin: 15px 0;
background-color: #e10019;
color: #fff;
}
.navbar {
margin-bottom: 0;
background-color: transparent;
z-index: 9999;
border: 0;
font-size: 14px !important;
line-height: 1.42857143 !important;
letter-spacing: 4px;
border-radius: 0;
font-family: Montserrat, sans-serif;
}
.navbar li a, .navbar .navbar-brand {
color: #fff !important;
}
.navbar-nav li a:hover, .navbar-nav li.active a {
color: #f4511e !important;
background-color: #fff !important;
}
.navbar-default .navbar-toggle {
border-color: transparent;
color: #fff !important;
}
footer .glyphicon {
font-size: 20px;
margin-bottom: 20px;
color: #f4511e;
}
.slideanim {visibility:hidden;}
.slide {
animation-name: slide;
-webkit-animation-name: slide; 
animation-duration: 1s; 
-webkit-animation-duration: 1s;
visibility: visible; 
}
@keyframes slide {
0% {
opacity: 0;
-webkit-transform: translateY(70%);
} 
100% {
opacity: 1;
-webkit-transform: translateY(0%);
} 
}
@-webkit-keyframes slide {
0% {
opacity: 0;
-webkit-transform: translateY(70%);
} 
100% {
opacity: 1;
-webkit-transform: translateY(0%);
}
}
@media screen and (max-width: 768px) {
.col-sm-4 {
text-align: center;
margin: 25px 0;
}
.btn-lg {
width: 100%;
margin-bottom: 35px;
}
}
@media screen and (max-width: 480px) {
.logo {
font-size: 150px;
}
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<a class="navbar-brand" href="#myPage"><img class="logo" src="Perkplain.png" width="200px"></a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="#about"><strong>ABOUT</strong></a></li>
<li><a href="#employers"><strong>EMPLOYERS</strong></a></li>
<li><a href="#employees"><strong>EMPLOYEES</strong></a></li>
<li><a href="#merchants"><strong>MERCHANTS</strong></a></li>
<li><a href="#perks"><strong>PERKS</strong></a></li>
<li class="clr4 dropdown">
<a class="dropdown-toggle" data-toggle="dropdown">LOG IN<span class="caret"></span></a>
<ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
<li>
<form class="navbar-form navbar-right" method="post">
<div class="form-group">
<input style="padding: 5px 0px 5px 5px; width:233px;" type="email" name="loginemail" placeholder="you@yourcompanyemail.com" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>"  />
</div>
<div class="form-group">
<input style= "margin-top: 5px; width:233px;" type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>"  />
</div>
<div class="form-group">
<input style="margin-top: 5px;" type="submit" value="Log In" class="btn btn-success" name="submit" />
</form>
</li>
</ul>
</div>
</div>
</nav>

<div class="jumbotron text-center">
<h3>Perksperience</h3>
<h4>[<strong>perk</strong>-spear-<i>EE</i>-ence] noun</h4>
<h5>1. Employee perks <em>made simple.</em></h5>
<!---<button class="btn btn-default"><strong>Request a Demo</strong></button> -->
<button class="btn btn-success">Request a Demo</button>

</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid text-center">
<h2>What is Perk City?</h2>
<h4>Perk City is a fun, captivating way for employees to receive preferred pricing on a wide variety of products and services. Employers can provide their team with access to Perk City, and Merchants can use PerkCity to gain exposure to a large community of potential buyers. </h4>
<br>
<img class="perkcitycircle" src="Perkcitycircle.png">


</div>
<br><br>


<!-- Container (Services Section) -->
<div id="employers" class="container-fluid text-center">
<h2>Employers</h2>
<h4>Looking to recruit and retain top-notch people? Perk City adds one more weapon to your arsenal. Not only is it an engaging and fun way to incentivize performance, it also stretches paychecks :) </h4>
<br>

</div>
<br><br>

</div>
</div>
</div>

<!-- Container (Portfolio Section) -->
<div id="employees" class="container-fluid text-center bg-grey">
<h2>Employees</h2><br>
<h4>Get preferred pricing on tons of different things from your favorite place to eat to where you workout. Discounts are recurring so as long as you stay working, they stay working. </h4>
<br>

</div>
<br><br>




<!-- Container (Pricing Section) -->
<div id="merchants" class="container-fluid">
<div class="text-center">
<h2>Merchants</h2>
<h4>Expose your product or service to thousands of potential customers.</h4>
<h4>Looking to build your brand locally? We got you.</h4>
</div>
<br>
<div class="row slideanim">
<div class="col-sm-4">
<span class=></span>
<h4></h4>
<p></p>
</div>
<div class="col-sm-4">
<span class=></span>
<h4></h4>
<p></p>
</div>
<div class="col-sm-4">
<span class=></span>
<h4></h4>
<p></p>
</div>
</div>
<br><br>


<!-- Container (Contact Section) -->
<div id="perks" class="container-fluid bg-grey">
<h2 class="text-center">PERKS</h2>
<div class="row">
<br>
<div class="row slideanim">
<div class="col-sm-4">
<span class=></span>
<h4>Just to give you a lil taste test...</h4>
<p></p>
</div>
<div class="col-sm-4">
<span class=""></span>
<h4></h4>
<p></p>
</div>
<div class="col-sm-4">
<span class=""></span>
<h4></h4>
<p></p>
</div>
</div>
<br><br>

</div>
</div>




<footer class="container-fluid text-center">
<a href="#myPage" title="To Top">
<span class="glyphicon glyphicon-chevron-up"></span>
</a>

</footer>

<script>
$(document).ready(function(){
// Add smooth scrolling to all links in navbar + footer link
$(".navbar a, footer a[href='#myPage']").on('click', function(event) {

// Prevent default anchor click behavior
event.preventDefault();

// Store hash
var hash = this.hash;

// Using jQuery's animate() method to add smooth page scroll
// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
$('html, body').animate({
scrollTop: $(hash).offset().top
}, 900, function(){

// Add hash (#) to URL when done scrolling (default click behavior)
window.location.hash = hash;
});
});

$(window).scroll(function() {
$(".slideanim").each(function(){
var pos = $(this).offset().top;

var winTop = $(window).scrollTop();
if (pos < winTop + 600) {
$(this).addClass("slide");
}
});
});
})
</script>

</body>
</html>