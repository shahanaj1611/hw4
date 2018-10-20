<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="ams";
$myconn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");

if(mysqli_connect_error())
	{
		echo mysqli_connect_error();
	}
else
{
	echo "connection successful";	
	}
?>