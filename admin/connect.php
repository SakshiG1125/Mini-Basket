<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname= "online_1";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

/*$sql = "create database mydb";
if($conn->query($sql) == TRUE)
{
	echo "Database Created";
}else{
	echo "Not Created".$conn->error;
}*/

 ?>