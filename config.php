<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Rumhati15';
$dbname = 'wordpress';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
	die('Failed Connect ! '.$conn->connect_error);
}
// else
// {
// 	echo "YES";
// }

?>