<?php

	include("connection.php");
	
	$query="UPDATE `Users` SET diary='".mysqli_real_escape_string($_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	mysqli_query($link, $query);
	
	
?>