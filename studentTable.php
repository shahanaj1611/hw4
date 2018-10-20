<?php

include('config.php');
$stdinfo="CREATE TABLE student(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
department VARCHAR(30) NOT NULL,
batch VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
$result = mysqli_query($myconn,$stdinfo);
if($result===TRUE)
{
	echo "std info table created";
}
else
{
	echo "std info table not created";
}


?>