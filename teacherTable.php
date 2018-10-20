<?php

include('config.php');
$teacherinfo="CREATE TABLE Teacher (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
department VARCHAR(30) NOT NULL,
number VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
$result = mysqli_query($myconn,$teacherinfo);
if($result===TRUE)
{
	echo "std info table created";
}
else
{
	echo "std info table not created";
}


?>