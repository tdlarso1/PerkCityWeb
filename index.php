<?php


	session_start();

	
	$_SESSION['loginid']=1;
	
	echo $_SESSION['loginid'];








	$link = mysqli_connect("localhost", "cl56-tdlarso1", "HR!xy4bNT", "cl56-tdlarso1");

	if (mysqli_connect_error()) {
		
	die("Could not connect to database");

	}

	// $query = "INSERT INTO `Users` (`name`, `email`, `password`) VALUES ('Nate', 'natetingey93@gmail.com', 'nate123')";

	mysqli_query($link, $query);

	$query="UPDATE `Users` SET `Phone number` = '623.217.7658' WHERE `id`=3 LIMIT 1 ";

	mysqli_query($link, $query);

	
	$query = "SELECT * FROM Users";

	if ($result=mysqli_query($link, $query)) {

		while ($row = mysqli_fetch_array($result)) {

		print_r($row);

	}


	} else {

		echo "It failed";

	}

?>