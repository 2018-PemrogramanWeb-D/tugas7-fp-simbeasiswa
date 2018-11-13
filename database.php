<?php
   	$servername="";
	$username="";
	$password="";
	$dbname="";
   	$conn=mysqli_connect($servername, $username, $password, $dbname);

   	if (!$conn) 
   	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "CREATE TABLE UPLOADER 
	(
		noktp int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nama varchar(100) NOT NULL,
		instansi varchar(100) NOT NULL,
		notlp varchar(20) NOT NULL
	)";
?>