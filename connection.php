<?php

function conectar(){


	$user="root";
	$pass="";
	$server="localhost";
	$db="tambo";
	$con=mysql_connect($server,$user,$pass) or die ("Error de conexion".mysql_error());
	mysql_select_db($db,$con);

	return $con;


}

?>