
<? include("login.php"); ?>


<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Bootstrap</title>



    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>



	<style>



	.navbar-brand {

		font-size:2.3em;

	}



	#topcontainer {

		background-image:url("pcnew.jpg");

		height:800px;

		width:100%;

		background-size:cover;

	
	
	
	
	}

	#topRow {

		margin-top:30px;

		text-align:center;

		font-size:1.4em

	}



	#topRow h1{

		font-size:500%;



	}



	.marginTop {

		margin-top:30px;



	}



	.marginbottom {

		margin-bottom:30px;



	}



	.volunteer{

		height:200px;

		width:200px;

	}



	.implement{

		height:200px;

		width:200px;



	}



	.access {

		height:200px;

		width:200px;


	}

	

	.logo {

		height:150px;

		width:400px;

	}


	.emailForm {

	border:1px solid grey;

	border-radius:10px;

	margin-top:20px;

	padding-bottom:15px;



	}



	</style>

<body data-spy="scroll" data-target=".navbar-collapse">



	<div class="navbar navbar-inverse navbar-fixed-top">



	<div class="container">

	

	<div class="navbar-header">	

		

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">



		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		</button>



		<a href="" class="navbar-brand">PC</a>	

	</div>



	<div class="collapse navbar-collapse">

		<ul class="nav navbar-nav">

			<li class="active"><a href="#home">Home</a></li>

			<li><a href="#about">About</a></li>

			<li><a href="#getinvolved">Get Involved</a></li>



		</ul>



	<form class="navbar-form navbar-right" method="post">

	<div class="form-group">



		<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>"  />

	</div>



	<div class="form-group">



		<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>"  />

	</div>



	<div class="checkbox">



		<label>

			<input type="checkbox">Keep me logged in

		</label>



	</div>	



	<div class="form-group">



		<input type="submit" value="Log In" class="btn btn-success" name="submit" />


			</form>

		</div>

	</div>

</div>



	<div class="container contentcontainer" id="topcontainer"> 



	<div class="row">

		<div class="col-md-6 col-md-offset-3" id="topRow">
		<img class="logo" src="Perkplain.png" />	


		<h2 class="marginTop">Access tons of local discounts</h2>

		
		
	 <?php
 			 
 			 	if ($error) {
 			 	
 			 		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
 			 	
 			 	}
 			 	
 			 	if ($message) {
 			 	
 			 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 			 	
 			 	}
 			 
 			 ?>
 			 
 			 
 			 <p class="bold marginTop">Interested? Sign Up Below!</p>
 			 
 			 <form class="marginTop" method="post"> 
 			 
 			 	<div class="form-group">
 			 	
  					<label for="email">Email Address</label>
  					
  				<input type="email" name="email" class="form-control" placeholder="Your Email" value="<? echo addslashes($_POST['email']); ?>" />
  																							   
				</div>
				
				<div class="form-group">
 			 	
  					<label for="password">Password</label>
  					
  				<input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>" />
  																								  
				</div>

 			 	<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop"/> 
 			 	
 			 </form>


			</div>

		</div>

	</div>





	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>



	<script>

		$(".contentcontainer").css("min-height",$(window).height());


	</script>

  </body>




</html>


