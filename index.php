<?php
//include("connection.php");

//$con=conectar();

//echo "success";

//$conn = mysqli_connect("107.180.51.78","kokixx12","kokixx12","test_andriod_sise");
	$conn = mysqli_connect("testpaino.cabjt10kojij.us-east-2.rds.amazonaws.com","kokixx12","kokixx12","testpaino");

If($conn->connect_error)
	die($conn->connect_error);

//	print "Success\n";



?>