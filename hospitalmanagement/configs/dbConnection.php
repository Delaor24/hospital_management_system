<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "hospital_management";

$con = mysqli_connect($host,$user,$pass,$dbName);
if(!$con){
	die("Database not connected");
	
}
?>