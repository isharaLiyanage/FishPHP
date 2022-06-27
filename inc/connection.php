<?php 

	$dbhost = 'localhost';
	$dbuser = 'id17602426_testdb';
	$dbpass = 'X*dK&(pDYjEC^)oony1y';
	$dbname = 'id17602426_test'; 

	$connection = mysqli_connect('localhost','root','','fish');

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	
	}
