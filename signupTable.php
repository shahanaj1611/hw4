<?php

include('config.php');
$signupinfo="CREATE TABLE Teacher (
id INT(6) UNSIGNED PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
password VARCHAR(50),
reg_date TIMESTAMP
)";
$result = mysqli_query($myconn,$signupinfo);
if($result===TRUE)
{
	echo "std info table created";
}
else
{
	echo "std info table not created";
}


?>