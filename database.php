<?php
   	$servername="localhost";
	$username="root";
	$password="";
	$dbname="testing";
   	$conn=mysqli_connect($servername, $username, $password, $dbname);

   	if (!$conn) 
   	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "CREATE TABLE uploader
	(
		Noktp int(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		Nama varchar(100) NOT NULL,
		Instansi varchar(100) NOT NULL,
		Notlp varchar(20) NOT NULL,
		Filename varchar(100) NOT NULL,
	)";
?>