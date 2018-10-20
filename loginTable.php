<?php

include('config.php');
$logininfo="CREATE TABLE Teacher (
id INT(6) UNSIGNED PRIMARY KEY, 
password VARCHAR(30) NOT NULL,
)";
$result = mysqli_query($myconn,$logininfo);
if($result===TRUE)
{
	echo "std info table created";
}
else
{
	echo "std info table not created";
}


?>