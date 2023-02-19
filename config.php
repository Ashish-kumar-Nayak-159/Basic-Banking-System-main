<?php

	$dbhost = "localhost:3306";
	$dbuser = "root";
	$dbpass = "";
	$db = "spark_foundation";


	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>