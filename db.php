<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$myconn=mysqli_connect("$dbhost","$dbuser","$dbpass");

if(mysqli_connect_error())
	{
		echo mysqli_connect_error();
	}

$sql="CREATE DATABASE ams";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo "db create successful";
	}
else
{
	echo "db not created";
}

?>